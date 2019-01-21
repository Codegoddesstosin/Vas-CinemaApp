@extends('cinema::layouts.master')

@section('content')

  <div class="container">

    <div class="row justify-content-center">

	     <div class="col-md-6">
	           <div class="form-group row">
	                  
	                  <div class="panel-body">

                         {{ $showtime -> id}}
                           {{ $showtime -> movie_id }}

                         </div>
  
	                   </div>
	        </div>
  
@stop