<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class PostFactory extends Factory
{
   /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
   */
   public function definition()
   {
      return[
         'body' => $this->faker->sentence(20),
      ];
   }
}