<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

        //relacion muchos a muchos 

        protected $fillable =['name','slug','color'];


        public function getRouteKeyName()
    {
      return "slug";
    }
        
        public function post(){
        
            return $this->belongsToMany(Post::class);
        }
}
