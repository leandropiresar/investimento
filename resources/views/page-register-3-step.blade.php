<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>3 Step Registration</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="body-bg-full profile-page" style="background-image: url(./assets/img/site-bg.jpg)">
    <div id="wrapper" class="row wrapper multi-step-signup">
        <!-- 3 Step Navigation -->
        <div class="steps-tab clearfix" data-target="#multi-step-signup">
            <ul class="list-unstyled list-inline text-center mt-4">
                <li class="list-inline-item active"><a href="#"><span class="step">1</span> Account Setup</a>
                </li>
                <li class="list-inline-item"><a href="#"><span class="step">2</span> Social Profiles</a>
                </li>
                <li class="list-inline-item"><a href="#"><span class="step">3</span> Personal Details</a>
                </li>
            </ul>
        </div>
        <!-- /.step-tabs -->
        <!-- Register Form -->
        <div class="col-12 col-sm-6 col-md-4 ml-md-auto login-center mx-auto">
            <form id="multi-step-signup" class="multi-step-form overflow-hidden" action="javascript:void(0)" method="post" />
                <fieldset id="signup-step-1" class="form-material active animated fadeInRight">
                    <h6 class="text-uppercase">Register Now</h6>
                    <p class="text-muted">Create your account for free and enjoy.</p>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Name" />
                        <label>Name</label>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Email" />
                        <label>Email</label>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Password" />
                        <label>Password</label>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Confirm Password" />
                        <label>Confirm Password</label>
                    </div>
                    <div class="form-group mb-3">
                        <div class="checkbox checkbox-primary">
                            <label>
                                <input type="checkbox" /> <span class="label-text">I agree to all <a href="#">Terms &amp; Conditions</a></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block ripple next-btn">Sign Up</button>
                    </div>
                </fieldset>
                <fieldset id="signup-step-2" class="form-material animated fadeInRight">
                    <h6 class="text-uppercase">Social Profiles</h6>
                    <p class="text-muted">Your presence on the social network</p>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Twitter" />
                        <label>Twitter</label>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Facebook" />
                        <label>Facebook</label>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Google Plus" />
                        <label>Google Plus</label>
                    </div>
                    <div class="form-group row text-center">
                        <div class="col-6">
                            <button class="btn btn-primary btn-block ripple prev-btn">Previous</button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary btn-block ripple next-btn">Next</button>
                        </div>
                    </div>
                </fieldset>
                <fieldset id="signup-step-3" class="form-material animated fadeInRight">
                    <h6 class="text-uppercase">Personal Details</h6>
                    <p class="text-muted">We will never sell it</p>
                    <div class="form-group no-gutters">
                        <input class="form-control" type="text" placeholder="First Name" />
                        <label>First Name</label>
                    </div>
                    <div class="form-group no-gutters">
                        <input class="form-control" type="text" placeholder="Last Name" />
                        <label>Last Name</label>
                    </div>
                    <div class="form-group no-gutters">
                        <input class="form-control" type="phone" placeholder="Phone" />
                        <label>Phone</label>
                    </div>
                    <div class="form-group no-gutters">
                        <textarea class="form-control" placeholder="Address"></textarea>
                        <label>Address</label>
                    </div>
                    <div class="form-group row text-center">
                        <div class="col-6">
                            <button class="btn btn-primary btn-block ripple prev-btn">Previous</button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary btn-block ripple" type="submit">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- /.login-center -->
    </div>
    <!-- /.body-container -->
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./assets/js/material-design.js"></script>
    <script>
        jQuery(document).ready(function($) {
        			var el = $('.multi-step-form');
        			el.each(function(){
        				var $this = $(this),
        						$stepsTab = $('.steps-tab[data-target="#' + $this.attr('id') + '"]');
        				$this.find('.next-btn').on( "click", function(){
        					$this.find('fieldset.active').removeClass('active').addClass('done').next('fieldset').addClass('active');
        					$stepsTab.find('li.active').removeClass('active').addClass('done').next('li').addClass('active');
        				});
        				$this.find('.prev-btn').on( "click", function(){
        					$this.find('fieldset.active').removeClass('active').prev('fieldset').addClass('active');
        					$stepsTab.find('li.active').removeClass('active').removeClass('done').prev('li').addClass('active');
        				});
        			});
        		});
    </script>
</body>

</html>