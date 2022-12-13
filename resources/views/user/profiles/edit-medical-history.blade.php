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
            <div class="m-b-lg">
                <small>
                    Dear {{ Auth::user()->firstname }}, We would like to know a bit more about you.
                </small>

                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach
            </div>

            <form action="{{ route('user.check.medical.history') }}" method="post">
                @csrf
                <div class="row">

                    <div class="row">
                        <h6 class="widget-title" align='center'>MEDICAL AND SURGICAL HISTORY</h6>
                        <br>
                        <div class="col-sm-6">
                                 
                            <div class="form-group">
                                <label for="exampleInputtext1">History of Chronic Illnesses</label>
                                <select name="chronic_illness" class="form-control">
                                <option value="">--Choose--</option>
                                    <option value="Null" {{ $history->chronic_illness == 'Null' ? 'selected': ''}}>Null</option>
                                    <option value="Hypertension" {{ $history->chronic_illness == 'Hypertension' ? 'selected': ''}}>Hypertension</option>
                                    <option value="Diabetes Mellitus" {{ $history->chronic_illness == 'Diabetes Mellitus' ? 'selected': ''}}>Diabetes Mellitus</option>
                                    <option value="Peptic Ulcer Disease" {{ $history->chronic_illness == 'Peptic Ulcer Disease' ? 'selected': ''}}>Peptic Ulcer Disease</option>
                                    <option value="Asthma" {{ $history->chronic_illness == 'Asthma' ? 'selected': ''}}>Asthma</option>
                                    <option value="Others" {{ $history->chronic_illness == 'Others' ? 'selected': ''}}>Others</option>
                                </select>
    
                                @error('chronic_illness')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputtext1">Had a Surgery?</label>
                                <select name="past_surgry" class="form-control">
                                <option value="">--Choose--</option>
                                    <option value="Yes" {{ $history->past_surgry == 'Yes' ? 'selected': ''}}>Yes</option>
                                    <option value="No" {{ $history->past_surgry == 'No' ? 'selected': ''}}>No</option>
                                </select>
    
                                @error('past_surgry')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputtext1">Blood type</label>
                                <select name="blood_type" class="form-control">
                                <option value="">--Choose--</option>
                                    <option value="A+" {{ $history->blood_type == 'A+' ? 'selected': ''}}>A+</option>
                                    <option value="A- " {{ $history->blood_type == 'A-' ? 'selected': ''}}>A-</option>
                                    <option value="B+ " {{ $history->blood_type == 'B+' ? 'selected': ''}}>B+</option>
                                    <option value="B- " {{ $history->blood_type == 'B-' ? 'selected': ''}}>B-</option>
                                    <option value="AB+ " {{ $history->blood_type == 'AB+' ? 'selected': ''}}>AB+</option>
                                    <option value="AB- " {{ $history->blood_type == 'AB-' ? 'selected': ''}}>AB-</option>
                                    <option value="O+" {{ $history->blood_type == 'O+' ? 'selected': ''}}>O+</option>
                                    <option value="O- " {{ $history->blood_type == 'O-' ? 'selected': ''}}>O-</option>
                                </select>
    
                                @error('blood_type')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputtext1">Drug History (regular routine medication)</label>
                                <textarea name="drug_history" class="form-control">
                                    {{ $history->drug_history }}
                                </textarea>
                                @error('drug_history')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
    
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputtext1">Previously Hospitalized?</label>
                                <select name="past_hospital" class="form-control">
                                <option value="">--Choose--</option>
                                    <option value="Yes" {{ $history->past_hospital == 'Yes' ? 'selected': ''}}>Yes</option>
                                    <option value="No" {{ $history->past_hospital == 'No' ? 'selected': ''}}>No</option>
                                    
                                </select>
    
                                @error('past_hospital')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputtext1">Had Blood Transfusions?</label>
                                <select name="past_B_transfusion" class="form-control">
                                <option value="">--Choose--</option>
                                    <option value="Yes" {{ $history->past_B_transfusion == 'Yes' ? 'selected': ''}}>Yes</option>
                                    <option value="No" {{ $history->past_B_transfusion == 'No' ? 'selected': ''}}>No</option>
                                    
                                </select>
    
                                @error('past_B_transfusion')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputtext1">Donated Organ?</label>
                                <select name="organ_donor" class="form-control">
                                <option value="">--Choose--</option>
                                    <option value="Yes" {{ $history->organ_donor == 'Yes' ? 'selected': ''}}>Yes</option>
                                    <option value="No" {{ $history->organ_donor == 'No' ? 'selected': ''}}>No</option>
                                    
                                </select>
    
                                @error('organ_donor')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputtext1">Allergies & Reactions</label>
                                <textarea name="allergies" class="form-control">
                                    {{ $history->allergies }}
                                </textarea>
                                @error('allergies')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    @if($profile->gender == 'Female')
                    <hr>
                    <h6 class="widget-title" align='center'>OBSTETRIC AND GYNAECOLOGICAL HISTORY</h6>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputtext1">Last Menstrual Period</label>
                                <input type="date" value="{{ $history->last_menst_period }}" class="form-control" id="exampleInputtext1"  name="last_menst_period">
                                @error('last_menst_period')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputtext1">Number of Deliveries</label>
                                <select name="no_delivery" class="form-control">
                                <option value="">--Choose--</option>
                                    <option value="0" {{ $history->no_delivery == '0' ? 'selected': ''}}>0</option>
                                    <option value="1" {{ $history->no_delivery == '1' ? 'selected': ''}}>1</option>
                                    <option value="2" {{ $history->no_delivery == '2' ? 'selected': ''}}>2</option>
                                    <option value="3" {{ $history->no_delivery == '3' ? 'selected': ''}}>3</option>
                                    <option value="4" {{ $history->no_delivery == '4' ? 'selected': ''}}>4</option>
                                    <option value="5" {{ $history->no_delivery == '5' ? 'selected': ''}}>5</option>
                                    <option value="6" {{ $history->no_delivery == '6' ? 'selected': ''}}>6</option>
                                    <option value="7" {{ $history->no_delivery == '7' ? 'selected': ''}}>7</option>
                                    <option value="8" {{ $history->no_delivery == '8' ? 'selected': ''}}>8</option>
                                    <option value="9" {{ $history->no_delivery == '9' ? 'selected': ''}}>9</option>
                                    <option value="10" {{ $history->no_delivery == '10' ? 'selected': ''}}>10</option>
                                </select>
    
                                @error('no_delivery')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            

                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputtext1">Number of Pregnancies</label>
                                <select name="no_pregnacy" class="form-control">
                                <option value="">--Choose--</option>
                                    <option value="0" {{ $history->no_pregnacy == '0' ? 'selected': ''}}>0</option>
                                    <option value="1" {{ $history->no_pregnacy == '1' ? 'selected': ''}}>1</option>
                                    <option value="2" {{ $history->no_pregnacy == '2' ? 'selected': ''}}>2</option>
                                    <option value="3" {{ $history->no_pregnacy == '3' ? 'selected': ''}}>3</option>
                                    <option value="4" {{ $history->no_pregnacy == '4' ? 'selected': ''}}>4</option>
                                    <option value="5" {{ $history->no_pregnacy == '5' ? 'selected': ''}}>5</option>
                                    <option value="6" {{ $history->no_pregnacy == '6' ? 'selected': ''}}>6</option>
                                    <option value="7" {{ $history->no_pregnacy == '7' ? 'selected': ''}}>7</option>
                                    <option value="8" {{ $history->no_pregnacy == '8' ? 'selected': ''}}>8</option>
                                    <option value="9" {{ $history->no_pregnacy == '9' ? 'selected': ''}}>9</option>
                                    <option value="10" {{ $history->no_pregnacy == '10' ? 'selected': ''}}>10</option>
                                </select>
    
                                @error('no_pregnacy')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Number of Children Alive</label>
                                <select name="no_children" class="form-control">
                                <option value="">--Choose--</option>
                                    <option value="0" {{ $history->no_children == '0' ? 'selected': ''}}>0</option>
                                    <option value="1" {{ $history->no_children == '1' ? 'selected': ''}}>1</option>
                                    <option value="2" {{ $history->no_children == '2' ? 'selected': ''}}>2</option>
                                    <option value="3" {{ $history->no_children == '3' ? 'selected': ''}}>3</option>
                                    <option value="4" {{ $history->no_children == '4' ? 'selected': ''}}>4</option>
                                    <option value="5" {{ $history->no_children == '5' ? 'selected': ''}}>5</option>
                                    <option value="6" {{ $history->no_children == '6' ? 'selected': ''}}>6</option>
                                    <option value="7" {{ $history->no_children == '7' ? 'selected': ''}}>7</option>
                                    <option value="8" {{ $history->no_children == '8' ? 'selected': ''}}>8</option>
                                    <option value="9" {{ $history->no_children == '9' ? 'selected': ''}}>9</option>
                                    <option value="10" {{ $history->no_children == '10' ? 'selected': ''}}>10</option>
                                </select>
    
                                @error('no_pregnacy')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputtext1">Number of Miscarrage</label>
                                <select name="no_miscarrage" class="form-control">
                                <option value="">--Choose--</option>
                                    <option value="0" {{ $history->no_miscarrage == '0' ? 'selected': ''}}>0</option>
                                    <option value="1" {{ $history->no_miscarrage == '1' ? 'selected': ''}}>1</option>
                                    <option value="2" {{ $history->no_miscarrage == '2' ? 'selected': ''}}>2</option>
                                    <option value="3" {{ $history->no_miscarrage == '3' ? 'selected': ''}}>3</option>
                                    <option value="4" {{ $history->no_miscarrage == '4' ? 'selected': ''}}>4</option>
                                    <option value="5" {{ $history->no_miscarrage == '5' ? 'selected': ''}}>5</option>
                                    <option value="6" {{ $history->no_miscarrage == '6' ? 'selected': ''}}>6</option>
                                    <option value="7" {{ $history->no_miscarrage == '7' ? 'selected': ''}}>7</option>
                                    <option value="8" {{ $history->no_miscarrage == '8' ? 'selected': ''}}>8</option>
                                    <option value="9" {{ $history->no_miscarrage == '9' ? 'selected': ''}}>9</option>
                                    <option value="10" {{ $history->no_miscarrage == '10' ? 'selected': ''}}>10</option>
                                </select>
    
                                @error('no_pregnacy')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                           
                        </div>  

                    </div>
                    

                
                    <!-- <div class="col-sm-6">


                        <div class="form-group">
                            <label for="exampleInputtext1">Medical Description</label>
                            <textarea name="description" class="form-control"></textarea>
                            @error('description')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                    </div>
                </div> -->
                @endif

                <button type="submit" class="btn btn-primary btn-md">Submit</button>
                
                @if(auth()->user()->medicalHistory->completed)
                    <a class="btn btn-info btn-md" href="{{ route(auth()->user()->role->name.'.'.'dashboard') }}">Proceed to dashboard</a>
                @endif
            </form>
        </div><!-- .widget-body -->
    </div><!-- .widget -->	
    </div>
</div><!-- .row -->

@endsection