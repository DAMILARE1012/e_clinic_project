@extends('auth.layouts.header')

@section('content')
	<div class="simple-page-form animated flipInY" id="login-form">
		<h4 class="form-title m-b-xl text-center">{{ __('Reset Password') }}</h4>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

		<form action="{{ route('password.email') }}" method="POST">
            @csrf
			<div class="form-group">
					<input id="email" type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
    
				@error('email')
					<span class="text-danger" role="alert">
						{{ $message }}
					</span>
				@enderror
			</div>
            
            <input type="submit" class="btn btn-primary" value="SEND PASSWORD RESET LINK">
		</form>
	</div><!-- #login-form -->

@endsection
