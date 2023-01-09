@extends('layouts.index')

@section('links')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

@endsection

@section('content')

@if($message = Session::get('fail'))
		<div class="alert alert-danger">
			<p>{{ $message }}</p>
		</div>
@endif


<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Match-Table') }}</div>
            
                <div class="card-body">
                    <form method="POST" action="{{ route('matchstore')}}">
                        @csrf
                      
                        <div class="row mb-3">
                            <label  class="col-md-2 col-form-label text-md-end">{{ __('Match Name') }}<span style="color:red">*</span></label>
                        
                            <div class="col-md-9">
                                <input id="matchName" type="text" class="form-control " name="matchName"  value="" required>
                                <span style="color: red">@error('matchName'){{$message}}@enderror</span>
                
                            </div>
                        </div>
                
                        <div class="row mb-3">
                            <label  class="col-md-2 col-form-label text-md-end">{{ __('Location') }}</label>
                                <span></span>
                            <div class="col-md-9">
                                <input id="placeMatch" type="text" class="form-control" name="location" >
                            </div>
                        </div>
                
                        <div class="row mb-3">
                            <label  class="col-md-2 col-form-label text-md-end">{{ __('Date') }}<span style="color:red">*</span></label>
                
                            <div class="col-md-9">
                                <input  id="dateMatch" type="text" class="form-control datepicker" name="match_date" value="" required>
                                <span style="color: red">@error('match_date'){{$message}}@enderror</span>
                            </div>
                        </div>
                
                        <div class="row mb-3">
                            <label  class="col-md-2 col-form-label text-md-end">{{ __('Time') }}<span style="color:red">*</span></label>
                            <div class="col-md-9">
                                <input id="timeMatch" type="text" class="form-control timepicker" name="match_time" required>
                                <span style="color: red">@error('match_time'){{$message}}@enderror</span>
                            </div>
                        </div>
                
                
                
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button  type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            
            </div>

        </div>
    </div>
</div>       


@endsection


@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>


<script>
    $( function() {
      $( ".datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd'
      });
    } );
    
    $( function() {
        $('.timepicker').timepicker({
        timeFormat: 'hh:mm:ss',
        interval: 60,
        scrollbar: true
    });
    } );
  
    </script>

@endsection
