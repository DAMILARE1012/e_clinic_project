@extends('auth.layouts.header')

@section('content')
<div class="simple-page-form animated flipInY" id="login-form">
    <h4 class="form-title m-b-xl text-center">{{ __('Verify Your Email Address') }}</h4>
    <div class="card-body">
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif

        {{ __('Before proceeding, please check your email for a verification link.') }}
        {{ __('If you did not receive the email') }},
        <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
            @csrf
            <br>
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
        </form>
    </div>

</div>

@endsection
