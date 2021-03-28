<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            //'url' =>$this->faker->image('public/storage/posts',640,480,null,true)
            //si lo havcemos asi lo guadrara de esta manera public\storage\posts\imagen.jpg osea con el nombre de 
            //la imagen pero eso no queremos ni true ni false
            'url' =>'posts/'.$this->faker->image('public/storage/posts',640,480,null,false)//posts/image.jpg
        ];
    }
}
