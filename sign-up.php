
<?php
session_start();
if(isset($_SESSION['auth']))
{
    $_SESSION['message'] = "You are already logged in";
    header('Location: index.php');
    exit();
}
include('header.php');
?>
<head>
<link id="pagestyle" href="../admin/administrators/assets/CSS/material-dashboard.min.css" rel="stylesheet" />
</head>
    <section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
          $('input[name="cpassword"]').on('keyup', function() {
          if ($(this).val() != '') 
          {
          $('label[for="cpassword"]').addClass('d-none');
          }
           else 
          {
          $('label[for="cpassword"]').removeClass('d-none');
              }
            });
          });
      </script>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../admin/admin/assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
            <?php if(isset($_SESSION['message']))
            { 
              ?>
                <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
                  <strong>Hey!</strong> <?= $_SESSION['message']; ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php 
              unset($_SESSION['message']);
            } ?>
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                  <form action="functions/authcode.php" method="POST" role="form">
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Name</label>
                      <input type="text" name="name" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Phone number</label>
                      <input type="number" name="phone" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="email" name="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label password-label">Password</label>
                      <input type="password" name="password" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label password-label">Confirm password</label>
                      <input type="password" name="cpassword" class="form-control">
                    </div>
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" name="register_btn" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="./login.php" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <script>
        $('input[name="password"]').on('keyup', function() {
              if ($(this).val() !== '') {
                  $('.password-label').addClass('d-none');
              } else {
                  $('.password-label').removeClass('d-none');
              }
          });
      </script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </section>