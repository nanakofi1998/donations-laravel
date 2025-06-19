<!DOCTYPE html>
<html lang="en" class="h-100">

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
    <title>Bsystems Donor Management System - OTP Verification</title>
    
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
                    <div class="login-form">
                        <div class="text-center">
                            <h3 class="title">OTP Verification</h3>
                            <p>Enter the 6-digit code sent to your email</p>
                        </div>
                        <form action="{{ route ('verifyOtp')}}" method="POST">
                            @csrf
                            <div style="display: none;">
                                        Session success: {{ session('success') ?? 'No success message' }}
                                        Session error: {{ session('error') ?? 'No error message' }}
                            </div>
                            <input type="hidden" name="email" value="{{ session('email')}}">
                            <input type="hidden" name="otp" id="otp" value="">
                            <div class="mb-4 text-center">
                                <div class="otp-input-group d-flex justify-content-between">
                                    <input type="text" class="form-control otp-input" maxlength="1" autofocus>
                                    <input type="text" class="form-control otp-input" maxlength="1">
                                    <input type="text" class="form-control otp-input" maxlength="1">
                                    <input type="text" class="form-control otp-input" maxlength="1">
                                    <input type="text" class="form-control otp-input" maxlength="1">
                                    <input type="text" class="form-control otp-input" maxlength="1">
                                </div>
                            </div>
                            <div class="mb-4 text-center">
                                <p class="text-muted">Didn't receive code? <a href="{{ route ('resendOtp')}}" class="text-primary">Resend</a></p>
                                <p class="countdown">Resend OTP in <span id="countdown">60</span> seconds</p>
                            </div>
                            <div class="text-center mb-4">
                                <button type="submit" class="btn btn-outline-danger btn-block">Verify</button>
                            </div>
                            <div class="text-center">
                                <p class="text-muted">Wrong email? <a href="{{ route('signup') }}" class="text-primary">Change email</a></p>
                            </div>
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
                            .otp-input-group {
                                gap: 10px;
                            }
                            .otp-input {
                                text-align: center;
                                font-size: 1.5rem;
                                height: 60px;
                                width: 50px;
                            }
                            .countdown {
                                color: #dc3545;
                                font-weight: bold;
                            }
                        </style>
                    </div>    
                </div>
            </div>
        </div>
    </div>


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
   
    <script src="{{ asset ('assets/js/otp.js')}}"></script>
    <!-- Required vendors -->
    <script src="{{asset('assets/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('assets/js/deznav-init.js')}}"></script>
    <script src="{{asset('assets/js/demo.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/styleSwitcher.js')}}"></script>
</body>
</html>