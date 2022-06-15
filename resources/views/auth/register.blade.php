@extends('layouts.login_sign_up')

@section('content')

    <body class="bg-light-gray" id="body">
        <div class="container d-flex flex-column justify-content-between vh-100">
            <div class="row justify-content-center mt-5">
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <div class="app-brand">
                                <a href="{{ route('home') }}">
                                    <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg"
                                        preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                                        <g fill="none" fill-rule="evenodd">
                                            <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                                            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                                        </g>
                                    </svg>
                                    <span class="brand-name">VIMONET</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body p-5">
                            <h4 class="text-dark mb-5">Sign Up</h4>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12 mb-4">
                                        
                                        <input type="text" value="{{ old('firstname') }}" name="firstname" class="form-control input-lg @error('firstname') is-invalid @enderror" id="name"
                                            aria-describedby="nameHelp" placeholder="First Name" required autocomplete="firstname" autofocus>
                                            @error('firstname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        
                                        <input type="text" value="{{ old('lastname') }}" name="lastname" class="form-control input-lg @error('lastname') is-invalid @enderror" id="name"
                                            aria-describedby="nameHelp" placeholder="Last Name" required autocomplete="lastname" autofocus>
                                            @error('lastname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        
                                        <input type="email" value="{{ old('email') }}" name="email" class="form-control input-lg @error('email') is-invalid @enderror" id="name"
                                            aria-describedby="nameHelp" placeholder="Email" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                   
                                    <div class="form-group col-md-12 ">
                                        <input type="password" class="form-control input-lg @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12 ">
                                        <input type="password" class="form-control input-lg" id="cpassword" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                    <div class="col-md-12">
                                        <!-- <div class="d-inline-block mr-3">
                                            <label class="control control-checkbox">
                                                <input type="checkbox" />
                                                <div class="control-indicator"></div>
                                                I Agree the terms and conditions
                                            </label>

                                        </div> -->
                                        <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign Up</button>
                                        <p>Already have an account?
                                            <a class="text-blue" href="{{ route('signIn') }}">Sign in</a>
                                        </p>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="copyright pl-0">
                <p class="text-center">&copy; 2018 Copyright Sleek Dashboard Bootstrap Template by
                    <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
                </p>
            </div> --}}
        </div>
    </body>
@endsection

