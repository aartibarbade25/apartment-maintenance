

<?php
include "header.php";
include 'config.php';
?>
    
  


<!-- Registration 5 - Bootstrap Brain Component -->
<section class="p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="cardpri border-light-subtle shadow-sm" >
      <div class="row g-0">
        <div class="col-12 col-md-6 text-bg-primary account-block">
          <div class="d-flex align-items-center justify-content-center h-100 acc">
            <div class="col-10 col-xl-8 py-3">
              <img class="img-fluid rounded mb-4" loading="lazy" src="./assets/img/bsb-logo-light.svg" width="245" height="80" alt="BootstrapBrain Logo">
              -<h1 class="h1 mb-3 text-white">Get started on SocietySynk.</h1>
              <p class="lead m-0 text-white">You can then log into your SocietySynk App for Admins and Residents and the portal as well..</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="card-body p-3 p-md-4 p-xl-5">
         

            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                <!-- <fieldset class="border p-3 mb-4"> -->
                  <h2 class="h3 mt-2 ">Registration Apertment/housing complex
                  </h2>
                  <h3 class="fs-6 fw-normal text-secondary m-0">Enter your details to register</h3>
                </div>
              </div>
            </div>
            
              <form action="#">
              <fieldset >
              <legend>Personalia:</legend>
              <div class="row  gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="firstName" class="form-label">Housing Name <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="firstName" id="firstName" placeholder="Housing Name " required>
                </div>
                <div class="col-12">
                  <label for="lastName" class="form-label">Address  <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="lastName" id="lastName" placeholder="Address" required>
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">City<span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="city" id="email" placeholder="City" required>
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Pincode<span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Pincode" required>
                </div>
                </fieldset>
                <fieldset >
            <legend>Admin Details:</legend>
             
                <div class="col-12">
                  <label for="email" class="form-label">Admin Name<span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Admin Detail" required>
                </div>
                <div class="col-12 mt-2">
                  <label for="email" class="form-label">Mobile<span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="00000000000" required>
                  <p>(An ativation code shall be sent via SMS to this mobile number.<br>
                  <span class="text-primary">The app will note work properly with invalid mobile number.</span>)</p>
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="name@gmil.com" required>
                  <p>(Please provid valid Email address for future instruction.<br>
                  <span class="text-primary">You will NOT be able proced future with invalid email.id.</span>)</p>
                </div>
                 <div class="col-12">
                  <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                  <input type="password" class="form-control" name="password" id="password" value="************" required>
                </div>
                </fieldset>

                <div class="col-12">
                  <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                    <label class="form-check-label text-dark " for="iAgree">
                      I agree to the <a href="#!" class="link-primary text-decoration-none">terms and conditions</a>
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid mb-3 mt-3">
                    <button class="btn bsb-btn-xl btn-primary" type="submit">Create Account</button>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include "footer.php";
?>