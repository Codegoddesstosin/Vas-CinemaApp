<?php

namespace Modules\Movie\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Cinema\Entities\Cinema;
use Modules\Showtime\Entities\Showtime;


class Movie extends Model
{
    protected $fillable = [

        'id', 'title', 'description', 'duration'
    ];


     public function cinema()

    {
          
       return $this->belongsToMany(Cinema::class );
    }



     public function showtime ()
     
    {
       return $this->hasMany(Showtime::class);
    }


     //public function showtime()
     
    //{
       //return $this->hasMany(showtime::class, 'showtimes');
    //}

}
