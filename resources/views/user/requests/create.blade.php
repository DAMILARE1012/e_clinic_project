@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
        <complaint-form :user="{{ Auth::user() }}" :specializations="{{ $specializations }}"></complaint-form>
    </div>
</div><!-- .row -->

@endsection