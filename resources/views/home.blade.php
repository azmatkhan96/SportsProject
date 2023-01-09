@extends('layouts.index')

@section('content')
@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

@endsection
