<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from w3crm.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2024 16:26:26 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Bsystems Donor Management System">
	<meta property="og:title" content="Bsystems Donor Management System">
	<meta property="og:description" content="Bsystems Donor Management System">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Bsystems Donor Management System</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Welcome Back!</h3>
							<p>Sign in to your account to get start</p>
						</div>
						<form action="">
							<div class="mb-4">
								<label class="mb-1 text-dark">Email</label>
								<input type="email" class="form-control form-control" value="" placeholder="Enter your email">
							</div>
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Password</label>
								<input type="password" id="dz-password" class="form-control" value="" placeholder="********">
								<span class="show-pass eye">
								
									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>
								
								</span>
							</div>
							<div class="form-row d-flex justify-content-between mt-4 mb-2">
								<div class="mb-4">
									<div class="form-check custom-checkbox mb-3">
										<input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
										<label class="form-check-label" for="customCheckBox1">Remember me</label>
									</div>
								</div>
								<div class="mb-4">
									<a href="{{route ('reset-password')}}" class="btn-link text-primary">Forgot Password?</a>
								</div>
							</div>
							<div class="text-center mb-4">
								<button type="submit" class="btn btn-outline-danger btn-block">Sign In</button>
							</div>
							{{-- <h6 class="login-title"><span>Or continue with</span></h6> --}}
							
							{{-- <div class="mb-3">
								<ul class="d-flex align-self-center justify-content-center">
									<li><a target="_blank" href="https://www.facebook.com/" class="fab fa-facebook-f btn-facebook"></a></li>
									<li><a target="_blank" href="https://www.google.com/" class="fab fa-google-plus-g btn-google-plus mx-2"></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/" class="fab fa-linkedin-in btn-linkedin me-2"></a></li>
									<li><a target="_blank" href="https://twitter.com/" class="fab fa-twitter btn-twitter"></a></li>
								</ul>
							</div> --}}
							<p class="text-center">Not registered?  
								<a class="btn-link text-primary" href="{{ route ('signup')}}">Register</a>
							</p>
						</form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6 shadow-lg bg-light">
    				<div class="pages-left h-100 d-flex flex-column justify-content-center align-items-center">
        				<div class="login-content text-center">
            				<a href="javascript:void(0)"><img src="{{asset('assets/images/bsystems_logo.png')}}" class="mb-3 logo-dark bounce-animation" alt="" style="width:150px; height:50px"></a>
            				<h4 class="mb-3 bounce-animation">Bsystems® Donor Management Platform</h4>
        				</div>
						<div class="login-media text-center">
						 <img src="{{asset('assets/images/login-image.png')}}" alt="" class="img-fluid bounce-animation">
						</div>
						<style>
							@keyframes bounce {
								0%, 100% {
									transform: translateY(0);
								}
								50% {
									transform: translateY(-30px);
								}
							}
							.bounce-animation {
								animation: bounce 10s infinite;
							}
						</style>
    				</div>	
				</div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
 <script src="{{asset('assets/vendor/global/global.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/js/deznav-init.js')}}"></script>
<script src="{{asset('assets/js/demo.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/styleSwitcher.js')}}"></script>

</body>

<!-- Mirrored from w3crm.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2024 16:26:28 GMT -->
</html>