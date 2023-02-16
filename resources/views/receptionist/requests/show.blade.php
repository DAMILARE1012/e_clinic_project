@extends('layouts.dashboard')

@section('content')
<div class="row">
<div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">{{ $complaint->user->firstname }} Matched with: @if($existAssign){{ $existAssign->specialist->firstname }} {{ $existAssign->specialist->lastname }}@else None @endif</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">
            <div class="row">
                
                @if(Session::has('message'))
                    <div class="alert alert-info">
                        {{ Session::get('message') }}
                    </div>
                @endif
                
                <div class="col-md-6">
                    <div>
                        <div class="list-group">
                            <li class="list-group-item primary">User Information</li>
                            <li class="list-group-item">Tag no: #</li>
                            <li class="list-group-item">Patient: {{ $complaint->user->firstname }} {{ $complaint->user->lastname }}</li>
                            <li class="list-group-item">Gender: {{$complaint->user->profile->gender }}</li>
                            <li class="list-group-item">Date of Birth: {{ $complaint->user->profile->date_of_birth }}</li>
                            <li class="list-group-item">Religion: {{ $complaint->user->profile->religion }}</li>
                            <li class="list-group-item">City: {{ $complaint->user->profile->city }}</li>
                            <li class="list-group-item">State: {{ $complaint->user->profile->state }}</li>
                        </div>

                        <div>
                        
                        <ol>
                            <li class="list-group-item primary">Questionnaire/Preferences</li>
                            @foreach($complaint->questionnaire as $questionnaire)
                                @foreach($questionnaire->question($questionnaire->questionnaire_id) as $question)
                                    <li class="list-group-item">{{ $question->question }}</li>
                                @endforeach
                            @endforeach
                        </ol>

                    </div>
                    </div>
                </div>
            

                <div class="col-md-6">
                    <div>
                        <ul class="list-group">
                        <li class="list-group-item primary">Complaints</li>
                            <li class="list-group-item">Patients wants to see a <b>{{ $complaint->specialist->name }}</b></li>
                            <li class="list-group-item">Description: {{ $complaint->description }}</li>
                            <li class="list-group-item">Date logged: {{ $complaint->created_at->toDayDateTimeString() }}</li>
                        </ul>
                    </div>

                    <div>
                        <div class="list-group">
                            <li class="list-group-item primary">Medical History</li>
                            <li class="list-group-item">Chronic Illness: {{ $complaint->user->medicalHistory->chronic_illness }}</li>
                            <li class="list-group-item">Past Blood Transfusion: {{ $complaint->user->medicalHistory->past_B_transfusion }}</li>
                            <li class="list-group-item">Past Sugery: {{ $complaint->user->medicalHistory->past_surgry }}</li>
                            <li class="list-group-item">Drug History: {{ $complaint->user->medicalHistory->drug_history }}</li>
                            <li class="list-group-item">Past Hospital: {{ $complaint->user->medicalHistory->past_hospital }}</li>
                            <li class="list-group-item">Allergies & Reactions: {{ $complaint->user->medicalHistory->allergies }}</li>
                            <li class="list-group-item">Blood type: {{ $complaint->user->medicalHistory->blood_type }}</li>
                            <li class="list-group-item">Donated Organ: {{ $complaint->user->medicalHistory->organ_donor }}</li>
                            @if($complaint->user->profile->gender == 'Female')
                            <li class="list-group-item">Number of Pregnancy: {{ $complaint->user->medicalHistory->no_pregnancy }}</li>
                            <li class="list-group-item">Last Menstral Period: {{ $complaint->user->medicalHistory->last_menst_period }}</li>
                            @endif
                        </div>
                    </div>
                    
                </div>
            </div>

            <hr>


            <div class="row">
                <div class="col-md-6">
                    <h5 class="font-weight-bold">Assign Patient to Specialist</h5>
                    @if(!$existAssign)
                    <form method="POST" action="{{ route('reception.assign.specialist') }}">
                        @csrf
                        <div class="form-group">
                            <select class="form-control" name="specialist">
                                <option>--Select Specialist--</option>
                                @foreach($specialists as $specialist)
                                    <option value="{{ $specialist->id }}">{{ $specialist->firstname }} {{ $specialist->lastname }} - {{ $specialist->specialization->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="hidden" value="{{ $complaint->user_id }}" name="patient">
                        <input type="hidden" value="{{ $complaint->id }}" name="complaint">
                        
                        <div>
                            <button type="submit" class="btn btn-primary">Assign</button>
                        </div>

                    </form>
                    @else
                        <h5>Patient is assigned to {{ $existAssign->specialist->firstname }} {{ $existAssign->specialist->lastname }}</h5>
                    @endif
                </div>

                <div class="col-md-6">
                    
                </div>
            </div>
        </div><!-- .widget-body -->
    </div><!-- .widget -->
</div><!-- END column -->
</div>
@endsection
