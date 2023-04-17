<?php 
  $pg='login';
  $title = "Login";
  include('header.php');
?>

    <div class="wrapper">

        <header class="py-4">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#_"><img src="images/logo.png" alt="" class="img-fluid logo"></a>
                    <a href="contact-us.php" class="site-btn px-md-5 px-4 py-md-3 py-2">Contact Us</a>
                </div>
            </div>
        </header>

        <!-- signup section starts here -->
        <section class="login-bg">
            <div class="container-fluid px-0">
                <div class="login-card">
                    <div class="row ml-0 mr-0">
                        <div class="col-md-6 col-12 login-left-col">
                            <h2>The Best <br> Online Training Education <br> Starts Here</h2>
                            <p class="bold">Copyright © 2021. HIPAA ASSIST</p>
                        </div>
                        <div class="col-md-6 col-12 login-right-col">
                            <div class="position-relative">
                                <div class="login-right-content">
                                    <h4 class="text-center mt-5">Sign In</h4>
                                    <div class="form-field mt-5">
                                        <input type="email" class="site-input w-100 py-3" placeholder="Email Address" name="" id="">
                                    </div>
                                    <div class="form-field mb-1 mt-3">
                                        <div class="position-relative">
                                            <input type="password" class="site-input w-100 py-3 right-icon" placeholder="Password" name="" id="">
                                            <i class="far fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <p class="mt-4">
                                        <input type="checkbox" id="c1" name="cb">
                                        <label for="c1" class="bold">Remember Me</label>
                                    </p>
                                    <div class="text-center">
                                        <button class="site-btn mx-auto green-btn py-3 px-5 mt-4" data-toggle="modal" data-target=".loginSuccessful">Sign In</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade loginSuccessful" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content site-modal">
                    <i class="fas fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>

                    <div class="text-center">
                        <div class="modal-icon-div">
                            <i class="fas fa-check modal-icon"></i>
                        </div>
                        <h6 class="grey-text">Login Successful</h6>
                        <a href="landing-page.php" class="site-btn d-inline-block mt-4 py-3 px-5">Okay</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade incorrectCredentials" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content site-modal">
                    <i class="fas fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>

                    <div class="text-center">
                        <div class="modal-icon-div">
                            <i class="fas fa-exclamation modal-icon red-back"></i>
                        </div>
                        <p class="grey-text medium mb-0 sm-heading">Incorrect Login Credentials Please Contact Admin.</p>
                        <a href="landing-page.php" class="site-btn d-inline-block mt-4 py-3 px-5">Okay</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade failedTwice" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content site-modal">
                    <i class="fas fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
                    <div class="text-center">
                        <div class="modal-icon-div">
                            <i class="fas fa-exclamation modal-icon red-back"></i>
                        </div>
                        <p class="grey-text medium mb-0 sm-heading">We Are Very Sorry But You Have Failed This Quiz Twice. Please Contact The Admin.</p>
                        <a href="landing-page.php" class="site-btn d-inline-block mt-4 py-3 px-5">Contact Admin</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- signup section ends here -->
                
    </div>

    <div class="overlay"></div>

<?php include('footer.php') ?>