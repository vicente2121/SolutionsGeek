<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;//este metodo me crea una careta en la ruta donde guardaeemos la 
//imagenes 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   

        storage::deleteDirectory('posts');//elimina la carpeta
        storage::makeDirectory('posts');// aca lo llamamaos y le asignamos el nombre

        $this->call(RoleSeeder::class);
       $this->call(UserSeeder::class);
       Category::factory(4)->create();
       Tag::factory(8)->create();
       $this->call(PostsSeeder::class);
    

        // \App\Models\User::factory(10)->create();
    }
}
