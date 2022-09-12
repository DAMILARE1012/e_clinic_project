@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">Make New Request</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">
            <div class="m-b-lg">
                <small>
                    Quickly let us know how we can help you today.
                </small>
            </div>

            <form action="{{ route('user.make.complaint') }}" method="post">
                @csrf

                
                <div class="form-group">
                    <label for="exampleInputEmail1">Description of Problem</label>
                    <textarea class="form-control" name="description"></textarea>
                    @error('description')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-md">Submit</button>
            </form>
        </div><!-- .widget-body -->
    </div><!-- .widget -->	
    </div>
</div><!-- .row -->

@endsection