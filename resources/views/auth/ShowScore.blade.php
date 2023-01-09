@extends('layouts.index')
@section('content')



<div class="container">	
    
	<div class="row justify-content-center">
		<div class="col-md-8">
            <table class="table table-bordered shadow text-center">
                <thead class="table-dark">
                <tr>
                    
                    <th>Team Name</th>
                    <th>Scores</th>
                </tr>	
                </thead>
                
   
    @foreach( $val as $p )


                <tr>
                    
                    <td>{{$p->TeamName}}</td>
                    <td>{{$p->Score}}</td>
    
                </tr>


    @endforeach


    
            </table>

        </div>
		
	</div>
</div>



@endsection