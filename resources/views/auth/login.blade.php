<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="{{URL::asset('login_form/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" 
    href="{{URL::asset('login_form/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" 
    href="{{URL::asset('login_form/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" 
    href="{{URL::asset('login_form/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" 
    href="{{URL::asset('login_form/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" 
    href="{{URL::asset('login_form/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" 
    href="{{URL::asset('login_form/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" 
    href="{{URL::asset('login_form/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" 
    href="{{URL::asset('login_form/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" 
    href="{{URL::asset('login_form/css/util.css')}}">
    <link rel="stylesheet" type="text/css" 
    href="{{URL::asset('login_form/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('login_form/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('login') }}">
                    @csrf
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" placeholder="Email"  id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                      
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        @if ($errors->has('email'))
                        <span role="alert">
                            <strong class="error_class">{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" placeholder="Password"
                        id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                        
                        @if ($errors->has('password'))
                        <span  role="alert">
                            <strong class="error_class">{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    </div>
                    
                      

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn">
							{{ __('Login') }}
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
    <script src="{{URL::asset('login_form/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{URL::asset('login_form/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{URL::asset('login_form/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{URL::asset('login_form/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{URL::asset('login_form/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{URL::asset('login_form/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{URL::asset('login_form/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{URL::asset('login_form/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{URL::asset('login_form/js/main.js')}}"></script>
    
</body>
</html>