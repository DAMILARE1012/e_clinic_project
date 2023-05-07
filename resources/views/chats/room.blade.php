@extends('layouts.dashboard')

@section('content')
<div class="row">
<div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">Chat Room: {{ $chatRoom->name }}</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">
            

            <div class="row">
                <div class="col-md-8">
                    <container :chatroom="{{ $chatRoom }}"/>
                </div>

                <div class="col-md-4">
                
                    @if(Auth::user()->role_id == 4)
                        <div style="margin-bottom: 4px;"> 
                            <a href="https://meet.google.com" class="btn btn btn-info btn-xs" target="_blank">Start a video Session</a>
                        </div>
                        <div style="margin-bottom: 4px;">
                            <a href="#" class="btn btn btn-warning btn-xs">Check Medical History</a>
                        </div>
                        <div style="margin-bottom: 4px;">
                            <a href="#" class="btn btn btn-danger btn-xs">End Session</a>
                        </div>
                    @endif
                </div>
            </div>
                
        </div><!-- .widget-body -->
    </div><!-- .widget -->
</div><!-- END column -->
</div>
@endsection
