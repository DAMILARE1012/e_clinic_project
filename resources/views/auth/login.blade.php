@extends('auth.layouts.header')

@section('content')
	<div class="simple-page-form animated flipInY" id="login-form">
		<h4 class="form-title m-b-xl text-center">Sign In With Your VIMONET Account</h4>
		<form action="{{ route('login') }}" method="POST">
			@csrf
			<div class="form-group">
					<input id="sign-in-email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
			
				@error('email')
					<span class="text-danger" role="alert">
						{{ $message }}
					</span>
				@enderror
			</div>

			<div class="form-group">
				<input id="sign-in-password" type="password" class="form-control" placeholder="Password" name="password">
				@error('password')
					<span class="text-danger" role="alert">
						{{ $message }}
					</span>
				@enderror
			</div>

		

			<div class="form-group m-b-xl">
				<div class="checkbox checkbox-primary">
					<input type="checkbox" id="keep_me_logged_in"/>
					<label for="keep_me_logged_in">Keep me signed in</label>
				</div>
			</div>
			<input type="submit" class="btn btn-primary" value="SIGN IN">
		</form>
	</div><!-- #login-form -->

	<div class="simple-page-footer">
		<p><a href="{{ route('password.request') }}">FORGOT YOUR PASSWORD ?</a></p>
		<p>
			<small>Don't have an account ?</small>
			<a href="{{ route('register') }}">CREATE AN ACCOUNT</a>
		</p>
	</div><!-- .simple-page-footer -->
@endsection