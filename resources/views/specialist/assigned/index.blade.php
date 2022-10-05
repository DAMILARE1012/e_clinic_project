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
                <table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Patient</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Date Assigned</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                    <tr>
                            <th>#</th>
                            <th>Patient</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Date Assigned</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($assigned as $key => $complaint)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $complaint->patients->firstname }}</td>
                            <td>{{ $complaint->complaints->description }}</td>
                            <td>
                                @if($complaint->complaints->status)
                                    <span class="text-success">Attended</span>
                                @else
                                    <span class="text-warning">Not attended</span>
                                @endif
                            </td>
                            <td>{{ $complaint->complaints->created_at->toFormattedDateString() }}</td>
                            <td>
                                <a href="{{ route('specialist.assigned.detail', ['id' => $complaint->id]) }}">View details</a>
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
