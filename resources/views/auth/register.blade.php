@extends('auth.layouts.header')

@section('content')
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
    
        <input type="submit" class="btn btn-primary" value="CREATE AN ACCOUNT">
    </form>
</div><!-- #login-form -->

<div class="simple-page-footer">
    <p><a href="#">FORGOT YOUR PASSWORD ?</a></p>
    <p>
        <small>Don't have an account ?</small>
        <a href="{{ route('login') }}">LOGIN</a>
    </p>
</div><!-- .simple-page-footer -->
@endsection