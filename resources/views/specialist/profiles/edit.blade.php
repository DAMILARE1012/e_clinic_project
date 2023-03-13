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
                <h4>
                    Dear {{ Auth::user()->firstname }}, We would like to know a bit more about you.
                </h4>

                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif
            </div>

            <form action="{{ route(auth()->user()->role->name.'.'.'update.profile') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="exampleInputtext1">Date Of Birth <i class="fa fa-exclamation-circle text-danger"></i></label>
                            <input name="date_of_birth" value="{{ auth()->user()->profile->date_of_birth }}" type="date" class="form-control" id="exampleInputtext1" placeholder="text">
                            @error('date_of_birth')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">Weight (kg)</label>
                            <input type="number" value="{{ auth()->user()->profile->weight }}" class="form-control" id="exampleInputtext1" placeholder="70kg" name="weight">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">City <i class="fa fa-exclamation-circle text-danger"></i></label>
                            <input type="text" value="{{ auth()->user()->profile->city }}" class="form-control" id="exampleInputtext1" placeholder="City" name="city">
                            @error('city')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">Religion <i class="fa fa-exclamation-circle text-danger"></i></label>
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

                        <div class="form-group">
                            <label for="exampleInputtext1">About <i class="fa fa-exclamation-circle text-danger"></i></label>
                            <textarea name="about" class="form-control">{{ auth()->user()->profile->about}}</textarea>
                            @error('about')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                    </div>
                    
                    <div class="col-sm-6">

                        
                        <div class="form-group">
                            <label for="exampleInputtext1">Gender <i class="fa fa-exclamation-circle text-danger"></i></label>
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
                            <label for="exampleInputtext1">Height (cm)</label>
                            <input type="number" value="{{ auth()->user()->profile->height }}" class="form-control" id="exampleInputtext1" placeholder="1.35cm" name="height">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">State <i class="fa fa-exclamation-circle text-danger"></i></label>
                            <input type="text" value="{{ auth()->user()->profile->state }}" class="form-control" id="exampleInputtext1" placeholder="State" name="state">
                            @error('state')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">Emergency contacts <i class="fa fa-exclamation-circle text-danger"></i></label>
                            <input type="text" value="{{ auth()->user()->profile->contacts }}" class="form-control" id="exampleInputtext1" placeholder="+23480********" name="contacts">
                           
                            @error('contacts')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        

                    </div>
                </div>
                

                <button type="submit" class="btn btn-primary btn-md">Update Profile</button>
                
                @if(auth()->user()->profile->completed)
                    <a class="btn btn-info btn-md" href="{{ route(auth()->user()->role->name.'.'.'dashboard') }}">Proceed to dashboard</a>
                @endif
            </form>
        </div><!-- .widget-body -->
    </div><!-- .widget -->	
    </div>
</div><!-- .row -->

@endsection