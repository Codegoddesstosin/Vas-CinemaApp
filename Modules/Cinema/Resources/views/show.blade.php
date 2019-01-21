@extends('cinema::layouts.master')

@section('content')

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

<div class="mv-img">

     <a href="index.html"><img class="logo" src="images/vas5.jpg" alt="" width="150" height="100"></a>
                       

                    </div>


  <div class="container">


    <div class="row justify-content-center">

	     <div class="col-md-6">
	           <div class="form-group row">
	                  
	                  <div class="panel-body">

                         {{ $cinema->title }}
                           {{ $cinema -> location }}

                         </div>
  
	                   </div>
	        </div>
  
@stop






