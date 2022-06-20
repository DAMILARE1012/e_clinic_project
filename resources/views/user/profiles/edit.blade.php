@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">Update Profile</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">
            <div class="m-b-lg">
                <small>
                    Dear {{ Auth::user()->firstname }}, We would like to know a bit more about you.
                </small>
            </div>

            <form action="{{ route('user.make.complaint') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date Of Birth</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            @error('dob')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Gender</label>
                            <select name="gender" class="form-control">
                            <option value="">--Choose--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>

                            @error('gender')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Religion</label>
                            <select name="religion" class="form-control">
                                <option value="">--Choose--</option>
                                <option value="male">Christianity</option>
                                <option value="female">Islam</option>
                                <option value="female">Others</option>
                            </select>
                            @error('gender')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Specialization</label>
                            <select name="religion" class="form-control">
                                <option value="">--Choose--</option>
                                @foreach($specializations as $key => $specialization)
                                    <option value="">{{ $specialization->name }}</option>
                                @endforeach
                            </select>
                            @error('gender')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                    </div>
                    
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">City</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="City" name="city">
                            @error('city')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">State</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="State" name="state">
                            @error('state')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">About</label>
                            <textarea name="about" class="form-control"></textarea>
                            @error('about')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                    </div>
                </div>
                

                <button type="submit" class="btn btn-primary btn-md">Submit</button>
            </form>
        </div><!-- .widget-body -->
    </div><!-- .widget -->	
    </div>
</div><!-- .row -->

@endsection