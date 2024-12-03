<?php
include "header.php";

?>



<div class="login-form ">
        <div class="form-header">
            <img src="../apartmaint/img/about-yeashobhoomi1.jpg" alt="Logo">
            <h3 class="text-primary">LOGIN </h3>
            <h3>SOCIETYSYNK</h3>
        </div>
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">User Mobile</label>
                <input type="text" class="form-control" id="username" placeholder="Enter your mobile number" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label text-bolder" for="rememberMe">Remember Me</label>
            </div>
            <button type="submit" class="butn butn-primary w-100  h-100 rounded text-dark text-bolder">Log In</button>
        </form>
        <div class="form-footer">
            <a href="#">I forgot my password</a><br>
            <a href="#">Register your Apartment/Housing Complex</a>
        </div>

 
    </div> 
    <?php
include "footer.php";
?>