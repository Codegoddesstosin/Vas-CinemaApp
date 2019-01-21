@extends('movie::layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<div class="mv-img">

     <a href="index.html"><img class="logo" src="images/vas5.jpg" alt="" width="150" height="100"></a>
                       

                    </div>

   <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Movies</h4>
               </div>

       <div class="container">

    <div class="row justify-content-center">

    	@foreach($movie as $movie)
    	
	     <div class="col-md-6">
	           <div class="form-group row">
	                
	                       <div class="col-md-9">
	                       	<div class="movie-item">
	    			<div class="mv-img">
	    				<img src="images/uploads/c6.jpg" alt="" width="285" height="437">
	    			</div>
	    			
	    		</div>    
	    		          <label class="control-label text-right col-md-3">Movie title</label>
	                      <p class="form-control-static"> {{ $movie->title }} </p>
	                       </div>
	                   </div>
	    

	       <div class="form-group row">
	       	
	    			
	  		</div> 
	         
	                       <div class="col-md-9">

                               <label class="control-label text-right col-md-3">Showtime</label>
	                      <p class="form-control-static"> {{ $movie ->showtime }} </p>
	                       </div>
	                   </div>

	                     <div class="form-group row">
	            
	                       <div class="col-md-9">
	                       	 <label class="control-label text-right col-md-3">Showtime</label>
	                      <p class="form-control-static"> {{ $movie->showtimeb }} </p>
	                       </div>
	                            <a href="/movie/{{ $movie->id }}">Now showing in Cinemas</a>

                               @endforeach
	                   </div>
	        </div>
</div>
  
  

	         
           
@stop








