<?php


namespace App\Repositories\Movies;

use Modules\Movie\Entities\Movie;



class EloquentMovies implements MoviesRepository
{
         
           //@var 

	      private $model;
       

       //@params Movie $model
 

      public function __construct(Movie $model)

      {
      	  $this->model = $model; 

      }

    

	 public function getAll()
	 {
           return  $this->model->all();

	 }

	 public function getById($id)
	 {

         return $this->findById($id);
	 }
    
      public function create (array $attributes)
     
     {
         return $this->model->create($attributes);
     
     }

     public function update($id, array $attributes)
     {

          $movie = $this->model->findorFail($id);
          $movie->update($attributes);
            return $movie;

     }


	 public function delete ($id)
	 {
             $this->getById($id)->delete();
             return true;
	 }
}