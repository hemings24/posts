<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
   /**
    * Seed the application's database.
    *
    * @return void
   */
   public function run()
   {
      User::factory()->count(5)->create()->each(function($user){
         Post::factory()->count(10)->create(['user_id' => $user->id]);
      });
   }
}