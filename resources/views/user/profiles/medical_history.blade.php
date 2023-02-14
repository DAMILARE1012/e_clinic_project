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
                    <th>Chronic Illnesses</th>
                    <th>Surgery</th>
                    <th>Blood type</th>
                    <th>Donated Organ</th>
                    <th> Hospitalized</th>
                    <th>Blood Transfusions</th>
                </tr>
                <tr>
                    <td>{{ $history->chronic_illness }}</td>'
                    <td>{{ $history->past_surgry }}</td>
                    <td>{{ $history->blood_type }}</td>
                    <td>{{ $history->organ_donor }}</td>
                    <td>{{ $history->past_hospital }}</td>
                    <td>{{ $history->past_B_transfusion }}</td>
                </tr>
            </table>
       
            @if($history->user->profile->gender == 'Female')
            <table class="table">
                <tr>
                    <th>Last Menstrual Period</th>
                    <th>Number of Pregnancies</th>
                    <th>Number of Deliveries</th>
                    <th>Number of Children Alive</th>
                    <th>Number of Miscarrage</th>
                 
                </tr>
                <tr>
                    <td>{{ $history->last_menst_period }}</td>'
                    <td>{{ $history->no_pregnacy }}</td>
                    <td>{{ $history->no_delivery }}</td>
                    <td>{{ $history->no_children }}</td>
                    <td>{{ $history->no_miscarrage }}</td>
                </tr>
            </table>
            @endif
            <div class="row">
                <hr>
                
                <header class="widget-header">

                    

                <div class="col-md-6 border">
                    <p class="m-b-lg docs"> <strong>Medical and Surgical History</strong> </p>
                    
                    <br>
                    <span class="border-top">{{ $history->drug_history }}</span>
                    
                </div>

                <div class="col-md-6 border">
                    <p class="m-b-lg docs"> <strong>Allergies & Reactions</strong> </p>                   
                    
                    <br>
                    <span class="border-top">{{ $history->allergies }}</span>
                    
                </div>                          
            </div>
				
		</div>
        <!-- END column -->
          
        </div><!-- .widget-body -->
    </div><!-- .widget -->	
</div>

@endsection

