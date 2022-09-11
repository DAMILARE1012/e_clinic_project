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
                                    <option value="Hypertension" {{ $history->chronic_illness == 'Hypertension' ? 'selected': ''}}>Hypertension</option>
                                    <option value="Diabetes Mellitus" {{ $history->chronic_illness == 'Diabetes Mellitus' ? 'selected': ''}}>Diabetes Mellitus</option>
                                    <option value="Peptic Ulcer Disease" {{ $history->chronic_illness == 'Peptic Ulcer Disease' ? 'selected': ''}}>Peptic Ulcer Disease</option>
                                    <option value="Asthma" {{ $history->chronic_illness == 'Asthma' ? 'selected': ''}}>Asthma</option>
                                </select>
    
                                @error('chronic_illness')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label for="exampleInputtext1">History of Past Surgeries</label>
                                <input name="past_surgry" value="{{ $history->past_surgry }} " type="text" class="form-control" id="exampleInputtext1" placeholder="text">
                                @error('past_surgry')
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
                                <label for="exampleInputtext1">History of Past Hospitalizations</label>
                                <textarea name="past_hospital" class="form-control">
                                    {{ $history->past_hospital }}
                                </textarea>
                                @error('past_hospital')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputtext1">History of Past Blood Transfusions</label>
                                <textarea name="past_B_transfusion" class="form-control">
                                    {{ $history->past_B_transfusion }}
                                </textarea>
                                @error('past_B_transfusion')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            

                          
                        </div>
                    </div>
                    <hr>
                    <h6 class="widget-title" align='center'>OBSTETRIC AND GYNAECOLOGICAL HISTORY (FEMALE)</h6>
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
                                <input type="text" value="{{ $history->no_delivery }}" class="form-control" id="exampleInputtext1" placeholder="Number of Deliveries" name="no_delivery">
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
                                <input type="text" value="{{ $history->no_pregnacy }}" class="form-control" id="exampleInputtext1" placeholder="Number of Pregnancies" name="no_pregnacy">
                                @error('no_pregnacy')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Number of Children Alive</label>
                                <input type="text" value="{{ $history->no_children }}" class="form-control" id="exampleInputtext1" placeholder="Number of Children Alive" name="no_children">
                                @error('no_children')
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