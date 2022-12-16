@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-primary"><span class="counter" data-plugin="counterUp">{{ $complaints->count() }}</h3>
							<small class="text-color">Total Requests</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-file-text-o"></i></span>
					</div>
					<footer class="widget-footer bg-primary">
						
					</footer>
				</div><!-- .widget -->
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-danger"><span class="counter" data-plugin="counterUp">{{ $todayComplaints->count() }}</h3>
							<small class="text-color">Total Requests Today</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-ban"></i></span>
					</div>
					<footer class="widget-footer bg-danger">
						
					</footer>
				</div><!-- .widget -->
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-info"><span class="counter" data-plugin="counterUp">{{ $pendingComplaints->count() }}</h3>
							<small class="text-color">Total Pending</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-file-text-o"></i></span>
					</div>
					<footer class="widget-footer bg-info">
					</footer>
				</div><!-- .widget -->
			</div>
		</div><!-- .row -->
    </div>
</div><!-- .row -->
@endsection