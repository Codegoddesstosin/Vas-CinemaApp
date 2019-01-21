<?php
namespace Modules\Showtime\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Movie\Entities\Movie;
use Modules\Cinema\Entities\Cinema;

class Showtime extends Model
{
    protected $fillable = [ 'movie_id', 'cinema_id', 'showtime', 'showtimeb', 'showtimesc'];


     public function movie()
     
    {
        return $this->belongsTo(Movie::class);
    }
   

      public function cinema()
     
    {
        return $this->belongsTo(Cinema::class);
    }
    
}
