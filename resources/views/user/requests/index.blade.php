@extends('layouts.dashboard')

@section('content')
<div class="row">
<div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">Complaints</h4>
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
            
            <div class="table-responsive">
                <table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Complaints</th>
                            <th>Status</th>
                            <th>Date Logged</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                    <tr>
                            <th>#</th>
                            <th>Complaints</th>
                            <th>Status</th>
                            <th>Date Logged</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($complaints as $key => $complaint)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $complaint->description }}</td>
                            <td>
                                @if($complaint->assigned && !$complaint->appointments->count() > 0)
                                    <span class="text-success">Assigned</span>
                                @elseif($complaint->appointments->count() > 0)
                                    <span class="text-info">Session Scheduled </span>
                                @else
                                <span class="text-warning">Pending </span>
                                @endif
                            </td>
                            <td>{{ $complaint->created_at }}</td>
                            <td>
                              
                                @if(!$complaint->appointments->where('selected', 1)->first() && $complaint->assigned)
                                    <a href="{{ route('user.choose.appointment', ['id' => $complaint->id]) }}">View details</a>
                                @elseif(!$complaint->assigned)
                                    Awaiting to be assigned
                                @else

                                @php
                                    $appointment = $complaint->appointments->where('selected', 1)->first();
                                @endphp
                                    <a href="{{ route('chat.room', ['roomId' => $appointment->chatRoom->id]) }}" class="btn btn-primary btn-xs"> Start Session</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div><!-- .widget-body -->
    </div><!-- .widget -->
</div><!-- END column -->
</div>
@endsection
