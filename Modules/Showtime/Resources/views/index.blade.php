@extends('showtime::layouts.master')

@section('content')
<div class="container">

    <div class="row justify-content-center">

    
    	
          
	     <div class="col-md-6">
	           <div class="form-group row">
	                
	                       <div class="col-md-9">
	                      <p class="form-control-static"> {{ $showtime->movie_id }} </p>
	                       </div>
	                   </div>
	     
	      


	       <div class="form-group row">
	                 
	                       <div class="col-md-9">
	                      <p class="form-control-static"> {{ $showtime ->showtime }} </p>
	                       </div>
	                   </div>

	                     <div class="form-group row">
	            
	                       <div class="col-md-9">
	                      <p class="form-control-static"> {{ $showtime ->showtimeb }} </p>
	                       </div>

	                        <div class="col-md-9">
	                      <p class="form-control-static"> {{ $showtime ->showtimec }} </p>
	                       </div>
	                          

                           
	                   </div>
	        </div>

	         
@stop
