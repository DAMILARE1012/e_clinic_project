
@extends('layouts.dashboard')

@section('content')
<div class="row">
<div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">My Appointments - {{ $thisMonth->format('F') }}</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">
            <div class="row">
                
                @if(Session::has('message'))
                    <div class="alert alert-info">
                        {{ Session::get('message') }}
                    </div>
                @endif
                
            </div>

            <div class="row">
                <div class="table-responsive">
                    <table class="table table-hovered" cellspacing="0" width="100%">
                        <thead>
                            <th>#</th>
                            <th>First name</th>
                            <th>Date</th>
                            <th>Start time</th>
                            <th>Finish time</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                            @foreach($appointments as $appointment)
                                <tr>
                                    <td>{{ $key=+1}}</td>
                                    <td>{{ $appointment->complaint->description }}</td>
                                    <td>{{ $appointment->date->toFormattedDateString() }}</td>
                                    <td>{{ $appointment->start_time->format('g:i A') }}</td>
                                    <td>{{ $appointment->finish_time->format('g:i A') }}</td>
                                    <td>
                                        <a href="{{ route('chat.room', ['roomId' => $appointment->chatRoom->id]) }}" class="btn btn-xs btn-primary">Start Session</a>
                                    </td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- .widget-body -->
    </div><!-- .widget -->
</div><!-- END column -->
</div>
@endsection

