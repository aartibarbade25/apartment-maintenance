

<?php
include "header.php";
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="form-containermobile shadow-lg " style="width: 100%; max-width: 400px; margin-top: 50px;">
        <h2 class="text-center mb-4">Create New Account</h2>
        <p class="text-center">Have an account? <a href="#">LOgin</a></p>
        <form action="process.php" method="POST">
            <div class="mb-3 input-group">
                <select class="form-select ms-3 me-3" name="country_code" style="max-width: 100px;" required>
                    <option value="+91" selected>🇮🇳 +91</option>
                    <option value="+1">🇺🇸 +1</option>
                    <option value="+44">🇬🇧 +44</option>
                    <!-- Add more country codes as needed -->
                </select>
                <input type="tel" name="phone_number" class="form-control" placeholder="Enter phone number" pattern="[0-9]{10}" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Continue</button>
        </form>
        <div class="alternative text-center">
            <a href="#">Signup with email</a>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>


