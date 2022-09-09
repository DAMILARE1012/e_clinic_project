@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="widget row no-gutter p-lg">						
            <div class="col-md-12 col-sm-12">
                <div>
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div>
                        <a href="{{ route('user.make.complaint') }}" class="btn btn-primary">Make A New Request</a>
                    </div>
                </div>
            </div>

        
        </div><!-- .widget -->	
    </div>
</div><!-- .row -->

@endsection