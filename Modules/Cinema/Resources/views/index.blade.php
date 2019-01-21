@extends('cinema::layouts.master')

@section('content')


  <div class="container">
  		<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					  
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="index.html"><img class="logo" src="images/vas5.jpg" alt="" width="150" height="100"></a>
			    </div>
 <div class="row justify-content-center">

    	@foreach($cinema as $cinema)
    	
          
	     <div class="col-md-6">
	           <div class="form-group row">
	                  
	                       <div class="col-md-9">
	                      <p class="form-control-static"> {{ $cinema->id }} </p>
	                       </div>
	                   </div>

                      

	               <a href="/cinema/{{ $cinema->id }}">Enter Cinema</a>
	             

	                <a href="/cinemas/{{ $cinema->id }}/showtimes">Movie Showtimes</a>
                   

	       <div class="form-group row">
	                 
	                      <div class="col-md-9">
	                      <p class="form-control-static"> {{ $cinema->name }} </p>
	                       </div>
	                   </div>

	                     <div class="form-group row">
	                 
	                       <div class="col-md-9">
	                      <p class="form-control-static"> {{ $cinema->location }} </p>
	                       </div>
	                 
                               @endforeach
	                   </div>
	        </div>

	         
           
	  
@stop

