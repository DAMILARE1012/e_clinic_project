@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-3 col-sm-6">
        <div class="widget stats-widget">
            <div class="widget-body clearfix">
                <div class="pull-left">
                    <h3 class="widget-title text-primary"><span class="counter" data-plugin="counterUp">{{ $specialists->count() }}</span></h3>
                    <small class="text-color">Active Specialists</small>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-user"></i></span>
            </div>
            <footer class="widget-footer bg-primary">
                <!-- <small>% charge</small> -->
                <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
            </footer>
        </div><!-- .widget -->
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="widget stats-widget">
            <div class="widget-body clearfix">
                <div class="pull-left">
                    <h3 class="widget-title text-success"><span class="counter" data-plugin="counterUp">{{ $users->count() }}</span></h3>
                    <small class="text-color">Total Users</small>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-users"></i></span>
            </div>
            <footer class="widget-footer bg-success">
                <!-- <small>% charge</small> -->
                <span class="small-chart pull-right" data-plugin="sparkline" data-options="[2,4,3,4,3], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
            </footer>
        </div><!-- .widget -->
    </div>

</div><!-- .row -->


@endsection