@extends('layouts.dashboard')

@section('content')
<div class="row">
<div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">Default DataTable</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">
            <div class="table-responsive">
                <table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Complaints</th>
                            <th>Status</th>
                            <th>Date Logged</th>
                        </tr>
                    </thead>
                    <tfoot>
                    <tr>
                            <th>#</th>
                            <th>Complaints</th>
                            <th>Status</th>
                            <th>Date Logged</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($complaints as $key => $complaint)
                        <tr>
                            <td>{{ $key++ }}</td>
                            <td>{{ $complaint->description }}</td>
                            <td>
                                @if($complaint->status)
                                    <span class="text-success">Accepted</span>
                                @else
                                    <span class="text-warning">Pending</span>
                                @endif
                            </td>
                            <td>{{ $complaint->created_at->diffForHumans() }}
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
