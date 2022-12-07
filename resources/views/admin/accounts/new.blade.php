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

            <form action="{{ route('admin.store.account') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Firstname</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Firstname">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Lastname</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Lastname">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Select Role</label>
                    <select class="form-control" name="role">
                        <option value="">---</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Select Specialization</label>
                    <select class="form-control" name="specialization">
                        <option value="">---</option>
                        <option value="">Not Applicable</option>
                        @foreach($specializations as $specialization)
                            <option value="{{ $specialization->name }}">{{ $specialization->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary btn-md">Submit</button>
            </form>
            
        </div><!-- .widget-body -->
    </div><!-- .widget -->
</div><!-- END column -->
</div>
@endsection
