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

                <div class="col-md-2">
                    <h5>Do a video Session</h5>
                </div>
            </div>
                
        </div><!-- .widget-body -->
    </div><!-- .widget -->
</div><!-- END column -->
</div>
@endsection
