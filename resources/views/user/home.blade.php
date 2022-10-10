@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-3 col-sm-6">
        <div class="widget stats-widget">
            <div class="widget-body clearfix">
                <div class="pull-left">
                    <h3 class="widget-title text-primary"><span class="counter" data-plugin="counterUp">66.136</span>k</h3>
                    <small class="text-color">My visits</small>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-paperclip"></i></span>
            </div>
            <footer class="widget-footer bg-primary">
                <small>% charge</small>
                <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
            </footer>
        </div><!-- .widget -->
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="widget stats-widget">
            <div class="widget-body clearfix">
                <div class="pull-left">
                    <h3 class="widget-title text-danger"><span class="counter" data-plugin="counterUp">3.490</span>k</h3>
                    <small class="text-color">My Requests</small>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-ban"></i></span>
            </div>
            <footer class="widget-footer bg-danger">
                <small>% charge</small>
                <span class="small-chart pull-right" data-plugin="sparkline" data-options="[1,2,3,5,4], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
            </footer>
        </div><!-- .widget -->
    </div>

</div><!-- .row -->

<div class="row">
    <div class="col-md-12">
        <div class="widget row no-gutter p-lg">						
            <div class="col-md-12 col-sm-12">
                <div>
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{ Session::get('message') }}
                        </div>
                    @endif

                    @if($todayRequests)
                        <div class="alert alert-info">
                            You have a pending request, You will be assigned to a specialist shortly. <a href="#" class="text-bold">view request detail</a>
                        </div>  
                    @endif
                    <div>
                        <a href="{{ route('user.make.complaint') }}" class="btn btn-primary">Make A New Request</a>
                    </div>
                </div>
            </div>

        
        </div><!-- .widget -->	
    </div>
</div><!-- .row -->

@endsection