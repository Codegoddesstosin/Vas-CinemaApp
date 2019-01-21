<?php

namespace Modules\Cinema\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Movie\Entities\Movie;
use Modules\Showtime\Entities\Showtime;

class Cinema extends Model
{
    protected $fillable = [ 'id', 'name', 'location'];

    public function movie()
    
    { 
       return $this->belongsToMany(Movie::class );
    }

     public function showtime()
    
    { 
       return $this->hasMany(Showtime::class );
    }

     //public function showtime()
    
    //{ 
       //return $this->hasMany(Showtime::class, 'showtimes' );
    //}
 
}
