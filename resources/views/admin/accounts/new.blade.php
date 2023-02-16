@extends('layouts.dashboard')

@section('content')
<div class="row">
<div class="col-md-8">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">Add New Account</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">

            @if(Session::has('message'))
                <div class="alert alert-{{Session::get('alert') }} alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ Session::get('message') }}
                </div>
            @endif

            <form action="{{ route('admin.store.account') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Firstname</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Firstname">
                    @error('firstname')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Lastname</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Lastname">
                    @error('lastname')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    @error('email')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Select Role</label>
                    <select class="form-control" name="role">
                        <option value="">---</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>

                    @error('role')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Select Specialization</label>
                    <select class="form-control" name="specialization">
                        <option value="">---</option>
                        <option value="0">Not Applicable</option>
                        @foreach($specializations as $specialization)
                            <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary btn-md">Create Account</button>
            </form>
            
        </div><!-- .widget-body -->
    </div><!-- .widget -->
</div><!-- END column -->
</div>
@endsection
