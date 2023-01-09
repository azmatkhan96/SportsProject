@extends('layouts.index')


@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Select Team and Players') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('store-Score') }}">
                        @csrf

                        <div class="row mb-3">

                          <div class="col-md-6">
                            <label>{{ __('Team Name') }}</label>
                            <select class="form-control" name="teamName" >
                                @foreach ($sc as $s)
                                <option value="{{$s->id}}">{{$s->TeamName}}</option>
                                @endforeach
                              
                            </select>
                          </div>

                            <div class="col-md-6">
                                <label>{{ __('Team Score') }}</label><span style="color:red">*</span>
                               <input type="text" class="form-control" name="score" required>

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


