
<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from w3crm.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2024 16:27:37 GMT -->
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
				<div class="col-lg-6 col-md-7 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Create an account!</h3>
							<p>Let’s get you all set up so you can verify your personal account and begin setting up your profile.</p>
						</div>
                        <form action=" {{route('signup')}}" method="POST">
                            @csrf
                            <div style="display: none;">
                                        Session success: {{ session('success') ?? 'No success message' }}
                                        Session error: {{ session('error') ?? 'No error message' }}
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="mb-1 text-dark">First Name</label>
                                    <input type="text" name="f_name" value="{{old ('f_name')}}" class="form-control" required placeholder="Enter your first name">
                                    @error('f_name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="mb-1 text-dark">Last Name</label>
                                    <input type="text" name="l_name" class="form-control" value="{{old('l_name')}}" required placeholder="Enter your last name">
                                    @error('l_name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="mb-1 text-dark">Phone Number</label>
                                    <input type="tel" name="phone" value="{{old('phone')}}" class="form-control" required placeholder="Enter your phone number">
                                    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="mb-1 text-dark">Email</label>
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control" required placeholder="Enter your email">
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 position-relative">
                                    <label class="mb-1 text-dark">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required placeholder="********">
                                    <span class="toggle-password position-absolute" style="top: 40px; right: 15px; cursor: pointer;">
                                        <i class="fa fa-eye-slash"></i>
                                    </span>
                                    <small id="password-strength" class="text-muted mt-1 d-block"></small>
                                </div>
                                <div class="col-md-6 mb-4 position-relative">
                                    <label class="mb-1 text-dark">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required placeholder="********">
                                    <span class="toggle-password position-absolute" style="top: 40px; right: 15px; cursor: pointer;">
                                        <i class="fa fa-eye-slash"></i>
                                    </span>
                                    <small id="password-match-message" class="text-danger mt-1 d-block"></small>
                                </div>
                            </div>
                             <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                <div class="col-6 mb-4">
                                    <div class="form-check custom-checkbox mb-3">
                                        <input type="radio" class="form-check-input" name="account_type" value="institution" id="institution">
                                        <label class="form-check-label" for="institution">Sign Up as an Institution <br><span class="text-danger"><small>(Non-Profit Organization)</small></span></label>
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="form-check custom-checkbox mb-3">
                                        <input type="radio" class="form-check-input custom-red" name="account_type" value="individual" id="individual" required>
                                        <label class="form-check-label" for="individual">Sign Up as Individual <br><span class="text-danger"><small>(Crowd Funding)</small></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                <div class="mb-4">
                                    <div class="form-check custom-checkbox mb-3">
                                        <input type="checkbox" class="form-check-input" id="policy-check" required>
                                        <label class="form-check-label" for="policy-check"><span class="text-danger"> *</span> I understand and agree to all policies</label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mb-4">
                                <button type="submit" class="btn btn-outline-danger btn-block">Sign Up</button>
                            </div>
                            <p class="text-center">Already registered?  
                                <a class="btn-link text-primary" href="{{route ('login')}}">Login</a>
                            </p>
                        </form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6 shadow-lg bg-light">
    				<div class="pages-left h-100 d-flex flex-column justify-content-center align-items-center">
        				<div class="login-content text-center">
            				<a href="#"><img src="{{asset('assets/images/bsystems_logo.png')}}" class="mb-3 logo-dark bounce-animation" alt="" style="width:150px; height:50px"></a>
            				<h4 class="mb-3 bounce-animation">Bsystems® Donor Management Platform</h4>
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/signup.png')}}" alt="donations-signup" class="bounce-animation image-fluid"></a>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
    new PasswordManager(
        '#password',
        '#password_confirmation',
        '#password-strength',
        '#password-match-message'
    );
});
</script>
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
<script src="{{asset('assets/vendor/global/global.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/deznav-init.js')}}"></script>
<script src="{{asset('assets/js/demo.js')}}"></script>
<script src="{{asset('assets/js/password-manager.js')}}"></script>
<script src="{{asset('assets/js/styleSwitcher.js')}}"></script>
</body>

</html>