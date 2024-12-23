<?php
include("connection.php");

// Define apiResponse() before calling it
function apiResponse($status, $message, $data = null) {
    echo json_encode(['status' => $status, 'message' => $message, 'data' => $data]);
    exit;
}

function create_account($data, $file) {
    if (!empty($data)) {
        global $connection;

        // Validate required fields
        $requiredFields = ['firstName', 'lastName', 'email', 'password', 'ConformPassword', 'number', 'experience', ];
        foreach ($requiredFields as $field) {
            if (!isset($data[$field]) || empty(trim($data[$field]))) { // Check if key exists and is not empty
                apiResponse(false, "Field '$field' is required.");
            }
        }

        // Validate First Name and Last Name (only alphabets, 2-50 characters)
        if (!preg_match('/^[a-zA-Z ]{2,50}$/', $data['firstName'])) {
            apiResponse(false, "Invalid first name. Only letters and spaces are allowed, 2-50 characters.");
        }
        if (!preg_match('/^[a-zA-Z ]{2,50}$/', $data['lastName'])) {
            apiResponse(false, "Invalid last name. Only letters and spaces are allowed, 2-50 characters.");
        }

        // Validate Contact Number (only digits, 10-15 characters)
        if (!preg_match('/^\d{10,15}$/', $data['number'])) {
            apiResponse(false, "Invalid contact number format. Only digits are allowed, 10-15 characters.");
        }

        // Validate Email
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            apiResponse(false, "Invalid email address format.");
        }

        // Validate Password Strength (minimum 8 characters, at least 1 letter, 1 number)
        if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $data['password'])) {
            apiResponse(false, "Password must be at least 8 characters long and include at least 1 letter and 1 number.");
        }

        // Check if passwords match
        if ($data['password'] !== $data['ConformPassword']) {
            apiResponse(false, "Passwords do not match.");
        }

        // Validate Experience (optional: no special characters, max 500 characters)
        if (strlen($data['experience']) > 500) {
            apiResponse(false, "Experience must be less than 500 characters.");
        }

        // Validate File Upload (optional, resume file type and size)
        // $allowedExtensions = ['pdf', 'doc', 'docx'];
        // $maxFileSize = 5 * 1024 * 1024; // 5 MB
        // $resumePath = null;
        // if (!empty($file['resume']['name'])) {
        //     $fileExtension = strtolower(pathinfo($file['resume']['name'], PATHINFO_EXTENSION));
        //     if (!in_array($fileExtension, $allowedExtensions)) {
        //         apiResponse(false, "Invalid file type. Only PDF, DOC, and DOCX are allowed.");
        //     }
        //     if ($file['resume']['size'] > $maxFileSize) {
        //         apiResponse(false, "File size exceeds 5 MB limit.");
        //     }

        //     // Handle resume upload
        //     $targetDir = "uploads/";
        //     $resumePath = $targetDir . uniqid() . "_" . basename($file['resume']['name']);
        //     if (!move_uploaded_file($file['resume']['tmp_name'], $resumePath)) {
        //         apiResponse(false, "Failed to upload resume.");
        //     }
        // }

        // Check if email already exists
        $stmt = $connection->prepare("SELECT id FROM user_registration WHERE email = ?");
        if (!$stmt) {
            apiResponse(false, "Database Error: " . $connection->error);
        }

        $stmt->bind_param("s", $data['email']);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->close();
            apiResponse(false, "Email is already registered.");
        }
        $stmt->close();

        // Hash the password for security
        $hashedPassword = password_hash($data['password'], PASSWORD_BCRYPT);

        // Insert new account
        $stmt = $connection->prepare(
            "INSERT INTO user_registration (first_name, last_name, email, contact_number, password, experience ) VALUES (?, ?, ?, ?, ?, ? )"
        );

        if (!$stmt) {
            apiResponse(false, "Database Error: " . $connection->error);
        }

        $stmt->bind_param(
            "ssssss",
            $data['firstName'],
            $data['lastName'],
            $data['email'],
            $data['number'],
            $hashedPassword,
            $data['experience'],
            // $resumePath
        );

        if ($stmt->execute()) {
            apiResponse(true, "Account Created Successfully", ["userid" => $stmt->insert_id]);
        } else {
            apiResponse(false, "Error creating account: " . $stmt->error);
        }
        $stmt->close();
    } else {
        apiResponse(false, "Post Data Not Found");
    }
}
