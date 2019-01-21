<?php

namespace Modules\Cinema\Http\Controllers;

use Modules\Cinema\Entities\Cinema;
use Modules\Movie\Entities\Movie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class CinemaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()

    {
        $cinema = cinema::all();   
        return view('cinema::index', compact('cinema'));
       
    }    

    public function showtimes ($cinemaid)
    {
       $cinema = Cinema::find($cinemaid);

       foreach ($cinema->showtime as $showtime) {
           echo $showtime->showtime;
           echo $showtime->showtimeb;
           
        }
       

       //return $cinema->showtime;

       //return view('movie::show', compact('movie'));
    }
      
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    

    public function create()
    {
        return view('movie::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {

           $cinema = new Cinema;
         
           $cinema->name = $request->name;
           $cinema->location = $request->location;
        
           
           $cinema->save();
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($cinemaid)

    {   
       
        
          $cinema = Cinema::find($cinemaid);

           foreach ($cinema->movie as $movie) {
          echo $movie->title;
          echo $movie->description;

          //$cinema->movie()->attach(5);
          //dd($cinema->movie);

        
        }
        
        //$cinema = Cinema::findorFail($id);
        //return view('cinema::show', compact('cinema'));
       
    }


      

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('cinema::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
