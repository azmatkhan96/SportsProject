@extends('layouts.index')
@section('content')



<div class="container">	
    
	<div class="row justify-content-center">
		<div class="col-md-8">
            <table class="table table-bordered shadow text-center">
                <thead class="table-dark">
                <tr>
                    <th>Match Name</th>
                    <th>Team Name</th>
                    <th>Players Name</th>
                </tr>	
                </thead>
                
   
    @foreach( $var as $p )


                <tr>
                    <td>{{$p->MatchName}}</td>
                    <td>{{$p->TeamName}}</td>
                    <td>{{$p->name}}</td>
    
                </tr>


    @endforeach


    
            </table>

        </div>
		
	</div>
</div>



@endsection