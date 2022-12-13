@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="row">

			<div class="col-md-3 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
						<h3 class="widget-title text-warning"><span class="counter" data-plugin="counterUp">{{ $pending_complaints->count() }}</h3>
							<small class="text-color">Total Pending</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-file-text-o"></i></span>
					</div>
					<footer class="widget-footer bg-warning">
						
					</footer>
				</div><!-- .widget -->
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-danger"><span class="counter" data-plugin="counterUp">{{ $pending_complaints->count() }}</h3>
							<small class="text-color">Total Requests</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-ban"></i></span>
					</div>
					<footer class="widget-footer bg-danger">
						
					</footer>
				</div><!-- .widget -->
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-success"><span class="counter" data-plugin="counterUp">8.378</span>k</h3>
							<small class="text-color">Total Assigned</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-unlock-alt"></i></span>
					</div>
					<footer class="widget-footer bg-success">
						
					</footer>
				</div><!-- .widget -->
			</div>

		</div><!-- .row -->
    </div>
</div><!-- .row -->
@endsection