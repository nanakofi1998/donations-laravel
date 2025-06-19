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
						<form action="{{route ('login-post')}}" method="POST">
							@csrf
							 <div style="display: none;">
                                        Session success: {{ session('success') ?? 'No success message' }}
                                        Session error: {{ session('error') ?? 'No error message' }}
                            </div>
							<div class="mb-4">
								<label class="mb-1 text-dark">Email</label>
								<input type="email" class="form-control form-control" value="" name="email" placeholder="Enter your email">
							</div>
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Password</label>
								<input type="password" id="dz-password" class="form-control" value="" name="password" placeholder="********">
								<span class="show-pass eye">
								
									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>
								
								</span>
							</div>
							<div class="form-row d-flex justify-content-between mt-4 mb-2">
								<div class="mb-4">
									<div class="form-check custom-checkbox mb-3">
										<input type="checkbox" class="form-check-input" id="customCheckBox1">
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
 @if (session('success'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 8000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer);
                toast.addEventListener('mouseleave', Swal.resumeTimer);
            },
            title: "Success",
            icon: "success",
            text: "{{session('success') }}",
            iconColor: '#3085d6',
            background: '#fff',
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 10000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer);
                toast.addEventListener('mouseleave', Swal.resumeTimer);
            },
            title: "Error",
            icon: "error",
            text: "{{session('error') }}",
            iconColor: '#3085d6',
            background: '#fff',
        });
    </script>
@endif
<!-- Required vendors -->
 <script src="{{asset('assets/vendor/global/global.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/js/deznav-init.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('assets/js/demo.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/styleSwitcher.js')}}"></script>

</body>

<!-- Mirrored from w3crm.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2024 16:26:28 GMT -->
</html>