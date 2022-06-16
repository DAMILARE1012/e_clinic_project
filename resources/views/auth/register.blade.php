<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'New Account')</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">
	
	@include('roots.admin._authcss')
</head>
<body class="simple-page">
	<div id="back-to-home">
		<a href="/" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
	</div>
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			<a href="/">
				<span><i class="fa fa-gg"></i></span>
				<span>VIMONET</span>
			</a>
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">Account Signup - VIMONET</h4>
	<form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="form-group">
            <input id="sign-in-email" type="text" class="form-control" placeholder="Firstname" name="firstname" value="{{ old('firstname') }}">
            @error('firstname')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="form-group">
            <input id="sign-in-email" type="text" class="form-control" placeholder="Lastname" name="lastname" value="{{ old('lastname') }}">
            @error('lastname')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>


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

        <div class="form-group">
            <input id="sign-in-password" type="password" class="form-control" placeholder="Password" name="password_confirmation">
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
	<p><a href="password-forget.html">FORGOT YOUR PASSWORD ?</a></p>
	<p>
		<small>Don't have an account ?</small>
		<a href="{{ route('register') }}">CREATE AN ACCOUNT</a>
	</p>
</div><!-- .simple-page-footer -->


	</div><!-- .simple-page-wrap -->
</body>
</html>