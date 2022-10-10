@extends('layouts.dashboard')

@section('content')
<div class="row">
<div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">Assigned Patients</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">
            <div class="table-responsive">
                <table id="default-datatable" data-plugin="DataTable" class="table table-hovered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Patient</th>
                            <th>Description</th>
                            <!-- <th>Status</th> -->
                            <th>Date Assigned</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                    <tr>
                            <th>#</th>
                            <th>Patient</th>
                            <th>Description</th>
                            <!-- <th>Status</th> -->
                            <th>Date Assigned</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($assigned as $key => $complaint)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $complaint->patients->firstname }} {{ $complaint->patients->lastname }}</td>
                            <td>{{ $complaint->complaints->description }}</td>
                            <!-- <td>
                                @if($complaint->complaints->status)
                                    <span class="text-success">Attended</span>
                                @else
                                    <span class="text-warning">Not attended</span>
                                @endif
                            </td> -->
                            <td>{{ $complaint->complaints->created_at->toFormattedDateString() }}</td>
                            <td>
                                @if($complaint->complaints->appointments->count() > 0 && !$complaint->complaints->status)
                                    <span class="text-success">Session suggested</span>
                                @elseif($complaint->complaints->status && $complaint->complaints->appointments->count() > 0)

                                    <span class="text-success">Completed</span>
                                    
                                @endif
                            </td>
                            <td>
                                @if(!$complaint->complaints->appointments->count() > 0)
                                    <a href="{{ route('specialist.assigned.detail', ['id' => $complaint->id]) }}">Schedule Session</a>
                                @else
                                    <span class="text-info"> Awaiting Session Confirmation from Patient </span>
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
