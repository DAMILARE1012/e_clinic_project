@extends('auth.layouts.header')

@section('content')
	<div class="simple-page-form animated flipInY" id="login-form">
		<h4 class="form-title m-b-xl text-center">{{ __('Reset Password') }}</h4>
		<form action="{{ route('password.update') }}" method="POST">
            <input type="hidden" name="token" value="{{ $token }}">
            @csrf
			<div class="form-group">
					<input id="email" type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
    
				@error('email')
					<span class="text-danger" role="alert">
						{{ $message }}
					</span>
				@enderror
			</div>

			<div class="form-group">
				<input id="sign-in-password" placeholder="Enter New Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                
				@error('password')
					<span class="text-danger" role="alert">
						{{ $message }}
					</span>
				@enderror
			</div>

            <div class="form-group">
				<input id="sign-in-password" placeholder="Enter New Password Again" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required>
			</div>

			<input type="submit" class="btn btn-primary" value="Confirm Password">
		</form>
	</div><!-- #login-form -->

	<div class="simple-page-footer">
	
	</div><!-- .simple-page-footer -->
@endsection