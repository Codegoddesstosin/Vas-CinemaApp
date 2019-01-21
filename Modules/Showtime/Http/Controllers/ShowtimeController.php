<?php

namespace Modules\Showtime\Http\Controllers;

use Modules\Showtime\Entities\Showtime;
//use Modules\Movie\Entities\Movie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ShowtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */



    public function index()
    {
        $showtime = Showtime::all();

        return $showtime;
        //return $showtime->movie_id;

        //return view('showtime::index', compact('showtime'));
         //return $showtime;

        //return view('showtime::index', compact('showtime'));
    }


    public function movie ($showtimeid)
    {
       $showtime = Showtime::find($showtimeid);
       return $showtime->cinema_id;

       //return view('movie::show', compact('movie'));

     
    }


    public function cinema ($showtimeid)
    {
       $showtime = Showtime::find($showtimeid);
       return $showtime->movie_id;

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
           $showtime = new Showtime;
         
           $showtime->movie_id = $request->movie_id;
           $showtime->cinema_id = $request->cinema_id;
           $showtime->showtime = $request->showtime;
           $showtime->showtimeb = $request->showtimeb;
           $showtime->showtimec = $request->showtimec;
           $showtime->save();
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
         $showtime = Showtime::findorFail($id);
         return $showtime;
        //return view('showtime::show', compact('showtime'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('showtime::edit');
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
