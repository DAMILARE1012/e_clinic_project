@extends('layouts.dashboard')

@section('content')
<div class="row">
<div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">Choose an Appointment</h4>
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
                    <p>Please select best time to interact with a specialist</p>

                        @foreach($appointments as $appointment)
                        <div class="col-sm-6 col-md-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">{{ $appointment->date->toFormattedDateString() }}</h4>
								</div>
								<div class="panel-body">
                                    <!-- <label>{{ $appointment->date->toFormattedDateString() }}</label> -->
                                    
									<label>Start time:</label>
                                    {{ $appointment->start_time->format('g:i A')  }}<br>
                                    <label>Finish time</label>
                                    {{ $appointment->finish_time->format('g:i A')  }}
                                    
								</div>

                                <div class="panel-footer text-center">
                                    <a href="{{ route('user.confirm.appointment', ['id' => $appointment->id]) }}" class="btn btn-sm btn-primary">Choose</a>
                                </div>
                                
							</div>
						</div><!-- END column -->

                        

                        

                        @endforeach 

                        @if($errors->any())
                            <div class="alert alert-danger"> 
                                @foreach ($errors->all() as $error)
                                    <li class="">{{$error}}</li>
                                @endforeach
                            </div>
                        @endif
                </div>
            </div>
    
        </div><!-- .widget-body -->
    </div><!-- .widget -->
</div><!-- END column -->
</div>
@endsection
