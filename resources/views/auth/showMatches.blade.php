@extends('layouts.index')
@section('content')



<div class="container">	
    
	<div class="row justify-content-center">
		<div class="col-md-8">
            <table class="table table-bordered shadow text-center">
                <thead class="table-dark">
                <tr>
                    <th>Match Name</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>	
                </thead>
                
   
    @foreach( $data as $p )


                <tr>
                    <td>{{$p->MatchName}}</td>
                    <td>{{$p->location}}</td>
                    <td>{{$p->date}}</td>
                    <td>{{$p->time}}</td>
    
                </tr>


    @endforeach


    
            </table>

        </div>
		
	</div>
</div>



@endsection