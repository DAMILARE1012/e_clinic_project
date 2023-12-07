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
                    <container :chatroom="{{ $chatRoom }}" :user="{{ auth()->user() }}"/>
                </div>

                <div class="col-md-4">

                    @if(Auth::user()->role_id == 4)
                        <div style="margin-bottom: 4px;">
                            <a href="https://meet.google.com" class="btn btn btn-info btn-xs" target="_blank">Start a video Session</a>
                        </div>
                        <!-- <div style="margin-bottom: 4px;">
                            <a href="#" class="btn btn btn-warning btn-xs">Check Medical History</a>
                        </div> -->
                        <div style="margin-bottom: 4px;">
                            <a href="#" class="btn btn btn-danger btn-xs">End Session</a>
                        </div>
                        <hr>

                        {{-- <div>
                            <h5>Patient Vitals</h5>
                            <ul>
                                <li>Temperature: {{ $vitals->temperature }}</li>
                                <li>Blood Pressure: {{ $vitals->blood_pressure }} mm Hg</li>
                                <li>Heart Rate: {{ $vitals->heart_rate }}bpm</li>
                                <li>Device ID: {{ $vitals->device_id }}</li>
                                <li>Device Battery: {{ $vitals->battery_level }}%</li>
                            </ul>

                        </div> --}}
                    @endif
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <h4>Medical History</h4>

                <table class="table">
                    <thead>
                        <th>Blood Type</th>
                        <th>Chronic Illness</th>
                        <th>Hospitalized before?</th>
                        <th>Past Surgery</th>
                        <th>Blood Transfusion</th>
                        <th>Any Drug History</th>
                        <th>Last Menstral Period</th>
                        <th>No of Pregnancy</th>
                        <th>No of Delivery</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $medicalHistory->blood_type }}</td>
                            <td>{{ $medicalHistory->chronic_illness }}</td>
                            <td>{{ $medicalHistory->past_hospital }}</td>
                            <td>{{ $medicalHistory->past_surgry }}</td>
                            <td>{{ $medicalHistory->past_B_transfusion }}</td>
                            <td>{{ $medicalHistory->drug_history }}</td>
                            <td>{{ $medicalHistory->last_menst_period }}</td>
                            <td>{{ $medicalHistory->no_pregrancy }}</td>
                            <td>{{ $medicalHistory->no_delivery }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div><!-- .widget-body -->
    </div><!-- .widget -->
</div><!-- END column -->
</div>
@endsection
