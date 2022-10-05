@extends('layouts.dashboard')

@section('content')
<div class="row">
<div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">{{ $complaint->user->firstname }} {{ $complaint->user->lastname }}</h4>
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
                <div class="col-md-12">
                    <h4>Suggest Session</h4>
                    <p>Please suggest possible time slot for session with patient</p>

                    <form class="form" method="POST" action="{{ route('specialist.suggest.appointment') }}">
                        @csrf
                        <input type="hidden" name="complaint_id" value="{{ $complaint->id }}">
                        <div class="col-sm-6 col-md-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">SLOT 1</h4>
								</div>
								<div class="panel-body">
                                    <label>Date</label>
                                    <input type="date" name="date_1" class="form-control" value="{{ old('date_1')}}">
                                    <hr>
									<label>Start time</label>
                                    <input type="time" name="start_time_1" class="form-control" value="{{ old('start_time_1')}}">
                                    <label>Finish time</label>
                                    <input type="time" name="finish_time_1" class="form-control" value="{{ old('finish_time_1')}}">
								</div>
							</div>
						</div><!-- END column -->

                        <div class="col-sm-6 col-md-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">SLOT 2</h4>
								</div>
								<div class="panel-body">
                                <label>Date</label>
                                    <input type="date" name="date_2" class="form-control" value="{{ old('date_2')}}">
                                    <hr>
									<label>Start time</label>
                                    <input type="time" name="start_time_2" class="form-control" value="{{ old('start_time_2')}}">
                                    <label>Finish time</label>
                                    <input type="time" name="finish_time_2" class="form-control" value="{{ old('finish_time_2')}}">
                                </div>
							</div>
						</div><!-- END column -->

                        <div class="col-sm-6 col-md-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">SLOT 3</h4>
								</div>
								<div class="panel-body">
                                <label>Date</label>
                                    <input type="date" name="date_3" class="form-control" value="{{ old('date_3')}}">
                                    <hr>
									<label>Start time</label>
                                    <input type="time" name="start_time_3" class="form-control" value="{{ old('start_time_3')}}">
                                    <label>Finish time</label>
                                    <input type="time" name="finish_time_3" class="form-control" value="{{ old('finish_time_3')}}">
								</div>
							</div>
						</div><!-- END column -->

                        <div class="form-group">
                        <input  type="submit" value="Send Suggestion" class="btn btn-sm btn-primary">
                        </div> 
                        @if($errors->any())
                            <div class="alert alert-danger"> 
                                @foreach ($errors->all() as $error)
                                    <li class="">{{$error}}</li>
                                @endforeach
                            </div>
                        @endif
                    </form>
                </div>
            </div>
    
        </div><!-- .widget-body -->
    </div><!-- .widget -->
</div><!-- END column -->
</div>
@endsection
