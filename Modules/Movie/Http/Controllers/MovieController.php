<?php

namespace Modules\Movie\Http\Controllers;

use Modules\Movie\Entities\Movie;
use Modules\Cinema\Entities\Cinema;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\Movies\MoviesRepository;
use App\Repositories\Movies\EloquentMovies;
use Illuminate\Routing\Controller;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return
     * @var MovieRepository

     Response

     */

      private $movie;

    public function __construct(MoviesRepository $movie)
    {
        $this->movie = $movie;
    }

    public function getAllMovies()
    {
        return $this->movie->getAll(); 

    }

    public function showtimes ($movieid)
    {
       $movie = Movie::find($movieid);

          foreach ($movie->showtime as $showtime) {
           echo $showtime->showtime;
           echo $showtime->showtimeb;
        }

        //return $movie->showtime;

    }

 

       //return view('movie::show', compact('movie'));

     
    


    public function index()

    { 
        $movie = movie::all();
        return view('movie::index', compact('movie'));
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
        
           $movie = new Movie;
         
           $movie->title = $request->title;
           $movie->description = $request->description;
           $movie->duration = $request->duration;
           
           $movie->save();   
    }

    /**
     * Show the specified resource.
     * @return Response
     */


      public function show($movieid)
    {
       
          //$movie = Movie::find(1);
          //$movie->cinema()->attach(3);


          $movie = Movie::find($movieid);

          foreach ($movie->cinema as $cinema) {
          echo $cinema->name;
           
        }

           
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        //return view('movie::edit');
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
