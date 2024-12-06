<?php
include "header.php";

// Get the phone number from the query string
$phone = isset($_GET['phone']) ? htmlspecialchars($_GET['phone']) : '';

// Display the phone number or handle the case where it's not set
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="form-containermobile shadow-lg " style="width: 100%; max-width: 400px; margin-top: 50px;">
        <h2 class="text-center mb-4">Verify Your Phone</h2>
        <p class="text-center">We sent an OTP to <strong><?php echo $phone; ?></strong></p>
        <form action="verify_otp.php" method="POST">
            <div class="mb-3">
                <input type="text" name="otp" class="form-control" placeholder="Enter OTP" required>
                <input type="hidden" name="phone" value="<?php echo $phone; ?>">
                
            </div>
            <button type="submit" class="btn btn-primary w-100">Verify OTP</button>
        </form>
    </div>
</div>

<?php
include "footer.php";
?>

