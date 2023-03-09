@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">Update Password</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">
            <div class="m-b-lg">
                <small>
                    
                </small>

                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif
            
            </div>

            <form action="{{ route('update.password') }}" method="post">
                @csrf
                    
                <div class="row">
                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                </div>

                <div class="row">
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputtext1">Current Password</label>
                            <input name="current_password" type="password" class="form-control" id="exampleInputtext1">
                            @error('current_password')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>  
                </div>

                <div class="row">
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputtext1">New Password</label>
                            <input name="new_password" type="password" class="form-control" id="exampleInputtext1">
                            
                            @error('new_password')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputtext1">Confirm Password</label>
                            <input name="new_password_confirmation" type="password" class="form-control" id="exampleInputtext1"> 

                            @error('new_password_confirmation')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary btn-md">Update Password</button>
                <a class="btn btn-info btn-md" href="{{ route(auth()->user()->role->name.'.'.'dashboard') }}">Back to dashboard</a>
            </form>
        </div><!-- .widget-body -->
    </div><!-- .widget -->	
    </div>
</div><!-- .row -->

@endsection