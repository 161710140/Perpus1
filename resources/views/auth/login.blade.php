<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('Login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('Login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('Login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(Login/images/BOOKS.jpg);">
					<span class="login100-form-title-1">
						 Sign In
					</span>
				</div>

				<form method="POST" action="{{route('login')}}" class="login100-form validate-form">
                    @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">{{ __('E-Mail') }}</span>
						<input id="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" type="email" name="email" placeholder="Masukan Alamat Email" autofocus>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">{{ __('Password') }}</span>
						<input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password" name="password" placeholder="Masukan password">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
                        {{ __('Login') }}
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="{{asset('Login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('Login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('Login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('Login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('Login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('Login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('Login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('Login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('Login/js/main.js')}}"></script>

</body>
</html>
