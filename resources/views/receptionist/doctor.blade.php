@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="widget p-lg">
            <h3 class="m-b-lg">Specialists</h3>
            <table class="table table-hover">
                <tr><th>#</th><th>Name</th><th>Last Name</th><th>Username</th></tr>
                @forelse ($doctors as $key => $doctor)
                <tr><td>1</td><td>{{$doctor->firstname }} {{$doctor->lastname }}</td><td>Otto</td><td>@mdo</td></tr>
                
                @empty
                No Specialist found!
                @endforelse
            </table>
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->
@endsection