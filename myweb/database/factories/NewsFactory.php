<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->title(),
            'body' => $this->faker->paragraph(),
            'img_path' =>$this->faker->array_rand(Storage::files('images'),1) ,
            'user_id' => 1,
            'created_at' => now(),


        ];
    }
}
