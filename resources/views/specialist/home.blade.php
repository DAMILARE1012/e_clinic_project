@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-primary"><span class="counter" data-plugin="counterUp">6</h3>
							<small class="text-color">Total Assigned</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-paperclip"></i></span>
					</div>
					<footer class="widget-footer bg-primary">
					</footer>
				</div><!-- .widget -->
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-warning"><span class="counter" data-plugin="counterUp">4</h3>
							<small class="text-color">Pending Appointments</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-calendar"></i></span>
					</div>
					<footer class="widget-footer bg-warning">
						
					</footer>
				</div><!-- .widget -->
			</div>

            <div class="col-md-4 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-success"><span class="counter" data-plugin="counterUp">3</h3>
							<small class="text-color">Total Completed</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-group"></i></span>
					</div>
					<footer class="widget-footer bg-success">
					</footer>
				</div><!-- .widget -->
			</div>

		</div><!-- .row -->
    </div>
</div><!-- .row -->
@endsection