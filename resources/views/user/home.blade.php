@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="widget row no-gutter p-lg">						
            <div class="col-md-12 col-sm-12">
                <div>
                    @if(Session::has('message'))
                        <div class="alert alert-info alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{ Session::get('message') }}
                        </div>
                    @endif

                    @if($todayRequests && !$todayRequests->assigned)
                        <div class="alert alert-info">
                            You have a pending request, You will be assigned to a specialist shortly. 
                        </div>  
                    @elseif($todayRequests && $todayRequests->assigned && $todayRequests->appointments->count() < 1)
                        <div class="alert alert-info">
                            Your complaint has been assigned, please wait for session time allocation.
                            {{$todayRequests->appointments->count()}}
                        </div> 
                    @elseif($todayRequests && $todayRequests->appointments->count() > 0 && $todayRequests->assigned)
                        <div class="alert alert-success">
                            Your complaint has been assigned and a session has been suggested. Please confirm a convenient session.<br> <a href="{{ route('user.choose.appointment', ['id' => $todayRequests->id]) }}" class="text-bold">Confirm Session</a>
                        </div> 
                    @elseif($todayRequests && $todayRequests->appointments->where('selected', 1)->first())
                        <div class="alert alert-success">
                            You have an appointment for: <br>
                            <span class="bg-dark">{{ $todayRequests->appointments->where('selected', 1)->first()->start_time->toDayDateTimeString() }} - {{ $todayRequests->appointments->where('selected', 1)->first()->finish_time->toDayDateTimeString() }}</span>
                            @php
                                $appointment = $todayRequests->appointments->where('selected', 1)->first();
                            @endphp
                            <br>
                            <a href="{{ route('chat.room', ['roomId' => $appointment->chatRoom->id]) }}" class="btn btn-primary btn-xs">Start Session</a>
                        </div> 
                    @endif


                    <div>
                        <a href="{{ route('user.make.complaint') }}" class="btn btn-primary btn-xs">Make A New Request</a>
                        <a href="{{ route('user.complaints') }}" class="btn btn-info btn-xs">Past Requests</a>
                    </div>
                </div>
            </div>

        
        </div><!-- .widget -->	
    </div>
</div><!-- .row -->

@endsection