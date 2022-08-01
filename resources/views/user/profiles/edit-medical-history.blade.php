@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">Medical History</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">
            <div class="m-b-lg">
                <small>
                    Dear {{ Auth::user()->firstname }}, We would like to know a bit more about you.
                </small>

                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif
            </div>

            <form action="{{ route('user.check.medical.history') }}" method="post">
                @csrf
                <div class="row">
                
                    <div class="col-sm-6">


                        <div class="form-group">
                            <label for="exampleInputtext1">Medical Description</label>
                            <textarea name="description" class="form-control"></textarea>
                            @error('description')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                    </div>
                </div>
                

                <button type="submit" class="btn btn-primary btn-md">Submit</button>
                
                @if(auth()->user()->medicalHistory->completed)
                    <a class="btn btn-info btn-md" href="{{ route(auth()->user()->role->name.'.'.'dashboard') }}">Proceed to dashboard</a>
                @endif
            </form>
        </div><!-- .widget-body -->
    </div><!-- .widget -->	
    </div>
</div><!-- .row -->

@endsection