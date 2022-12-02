@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">Profile</h4>
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

            <form action="{{ route(auth()->user()->role->name.'.'.'update.profileA') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputtext1">First Name</label>
                            <input name="firstname" value="{{ auth()->user()->firstname }}" type="text" class="form-control" id="exampleInputtext1" placeholder="First Name">
                            @error('firstname')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">Email</label>
                            <input name="email" value="{{ auth()->user()->email }}" type="text" class="form-control" id="exampleInputtext1">
                            @error('email')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">Date Of Birth</label>
                            <input name="date_of_birth" value="{{ auth()->user()->profile->date_of_birth }}" type="date" class="form-control" id="exampleInputtext1" placeholder="text">
                            @error('date_of_birth')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">Gender</label>
                            <select name="gender" class="form-control">
                            <option value="">--Choose--</option>
                                <option value="Male" {{ auth()->user()->profile->gender == 'Male' ? 'selected': ''}}>Male</option>
                                <option value="Female" {{ auth()->user()->profile->gender == 'Female' ? 'selected': ''}}>Female</option>
                            </select>

                            @error('gender')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">Religion</label>
                            <select name="religion" class="form-control">
                                <option value="">--Choose--</option>
                                <option value="christianity" {{ auth()->user()->profile->religion == 'christianity' ? 'selected': ''}}>Christianity</option>
                                <option value="islam" {{ auth()->user()->profile->religion == 'islam' ? 'selected': ''}}>Islam</option>
                                <option value="others" {{ auth()->user()->profile->religion == 'others' ? 'selected': ''}}>Others</option>
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
                            <label for="exampleInputtext1">Last Name</label>
                            <input type="text" value="{{ auth()->user()->lastname }}" class="form-control" id="exampleInputtext1" placeholder="Last Name" name="lastname">
                            @error('lastname')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">City</label>
                            <input type="text" value="{{ auth()->user()->profile->city }}" class="form-control" id="exampleInputtext1" placeholder="City" name="city">
                            @error('city')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">State</label>
                            <input type="text" value="{{ auth()->user()->profile->state }}" class="form-control" id="exampleInputtext1" placeholder="State" name="state">
                            @error('state')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">About</label>
                            <textarea name="about" class="form-control">{{ auth()->user()->profile->about}}</textarea>
                            @error('about')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        
                    </div>
                </div>
                    <hr>
                    <div class="row">
                        @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputtext1">Currect Password</label>
                                <input name="current_password" type="password" class="form-control" id="exampleInputtext1">
                                @error('current_password')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label for="exampleInputtext1">Confirm Password</label>
                                <input name="new_password_confirmation" type="password" class="form-control" id="exampleInputtext1">
                                
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputtext1">New Password</label>
                                <input name="new_password" type="password" class="form-control" id="exampleInputtext1">
                             
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