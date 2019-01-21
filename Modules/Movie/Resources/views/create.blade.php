@extends('movie::layouts.master')



@section ('content')
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
            <title>Laravel</title>
        <!-- Fonts -->
        <link rel="stylesheet"  href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>



<body>

    <div style="background-image: url('')">

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
                                <h4 class="m-b-0 text-white">Add Movies</h4>


               </div>


       
</div>

<div class="panel-body">

<form action="/movies" method="POST">

    {{  csrf_field() }} 



<div class="form-group">
    <label for="contents">Movie title</label>

    <input type="text" name="title" class="form-control form-control-danger" placeholder="">

    </div>


    <div class="form-group">
    <label for="contents">Description</label>

    <textarea name="description" class="form-control"></textarea>
    </div>

    
<div class="form-group">
    <label for="contents">Duration</label>

    <input type="text" name="duration" class="form-control form-control-danger" placeholder="">

    </div>
      
    <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save</button>
 
</form>

   <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Add Cinemas</h4>


               </div>
<form action="/cinemas" method="POST">

    {{  csrf_field() }} 

<div class="form-group">
    <label for="contents">Name</label>

    <input type="text" name="name" class="form-control form-control-danger" placeholder="">

    </div>


    <div class="form-group">
    <label for="contents">Location</label>

    <textarea name="location" class="form-control"></textarea>
    </div>
   
    <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save</button>

    </form>

<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Add Schedule</h4>


               </div>

 <form action="/shows" method="POST">

    {{  csrf_field() }} 

<div class="form-group">

    <label for="contents">Schedule</label>

<div class="form-group">
    <label for="contents">movie id</label>

    <input type="text" name="movie_id" class="form-control form-control-danger" placeholder="">

    </div>


    <div class="form-group">
    <label for="contents">cinema id</label>

     <input type="text" name="cinema_id" class="form-control">

    </div>


    <div class="form-group">
     Choose Movie time:
    <input type="time" name="showtime">

    </div>

     <div class="form-group">
     Choose Movie time:
    <input type="time" name="showtimeb">
    </div>

     <div class="form-group">
     Choose Movietime:
    <input type="time" name="showtimec">
    </div>

    <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save</button>

    </form>

</div>
</div>
</div>
</div>
 

  </div>
    </div>
</div>
</div>
  
</body>
   

</html>

@endsection