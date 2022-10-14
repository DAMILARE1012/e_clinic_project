@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">Medical History</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">
            <p class="m-b-lg docs"> <strong>Medical and Surgical History</strong> </p>


            <table class="table">
                <tr>
                    <th>History of Chronic Illnesses</th>
                    <th>Had a Surgery</th>
                    <th>Previously Hospitalized</th>
                    <th>Had Blood Transfusions</th>
                </tr>
                <tr>
                    <td>{{ $history->chronic_illness }}</td>
                    <td>{{ $history->past_surgry }}</td>
                    <td>{{ $history->past_hospital }}</td>
                    <td>{{ $history->past_B_transfusion }}</td>
                </tr>
            </table>
            <div class="row">
                <hr>
                
                <header class="widget-header">

                    <p class="m-b-lg docs"> <strong>Medical and Surgical History</strong> </p>

                <div class="col-md-6 border">
                    
                    
                    <br>
                    <span class="border-top">{{ $history->drug_history }}</span>
                    
                </div>
            </div>
				
		</div><!-- END column -->
          
        </div><!-- .widget-body -->
    </div><!-- .widget -->	
</div>

@endsection