@extends('layouts.dashboard')

@section('content')
<div class="row">
<div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <a href="{{ route('admin.add.account') }}" class="btn btn-primary btn-xs pull-right">Add Account</a>            
            <h4 class="widget-title">Administrators</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">

            <div class="table-responsive">
                <table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                    <tr>
                            <th>#</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($admins as $key => $admin)  
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $admin->firstname }}</td>
                                <td>{{ $admin->lastname }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->role->name }}</td>
                                <td>
                                    <a href="{{ route('admin.edit.account', ['id' => $admin->id]) }}"><i class="fa fa-pencil"></i></a> |
                                    <a href="#"><i class="fa fa-trash text-danger"></i></a> |
                                    <a href="#"><i class="fa fa-eye"></i></a>
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
