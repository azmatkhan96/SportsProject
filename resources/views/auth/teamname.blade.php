@extends('layouts.index')


@section('links')

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />  
@endsection

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Select Team and Players') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('team-store') }}">
                        @csrf

                        <div class="row mb-3">

                          <div class="col-md-6">
                            <label>{{ __('Match Name') }}</label>
                            <select class="form-control" name="match" >
                                @foreach ($ply as $p)
                                <option value="{{$p->id}}">{{$p->MatchName}}</option>
                                @endforeach
                              
                            </select>
                          </div>

                            <div class="col-md-6">
                                <label>{{ __('Team Name') }}</label>
                               <input type="text" class="form-control" name="teamname" required>

                            </div>   
                        </div>

                        <div class="form-group">

                            <div class="col-md-14">
                                <label>{{ __('Player Name') }}</label>
                                <select name="playersname[]" class="form-control multiplename1">

                                    
                                        
                                            @foreach ($pro as $p)
                                                <option value="{{$p->id}}" @if ($p->id ==1)
                                                        disabled
                                                @endif>{{$p->name}}</option>
                                            @endforeach    
                                   
                                   
                                </select>
                            </div>
                        </div>



                    

                        <div class="row mb-3">
                            <div class="col-md-6 mt-4  offset-md-5">
                                <button type="submit" class="btn btn-primary">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
    $('.multiplename1').select2({
        multiple:true,
        maximumSelectionLength: 6,
        
    });
});  
    
</script>
@endsection
