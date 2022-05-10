<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
       
        $user = User::factory()->create([
            'name' => 'Andrew Buragnit'
        ]);
         Post::factory(5)->create([
            'user_id' => $user->id
         ]);

        $user = User::factory()->create([
            'name' => 'Areeya Mae'
        ]);
         Post::factory(5)->create([
            'user_id' => $user->id
         ]);

        $user = User::factory()->create([
            'name' => 'John Tubol'
        ]);

         Post::factory(5)->create([
            'user_id' => $user->id
         ]);

        // \App\Models\User::factory(10)->create();
        // $user = User::factory()->create();
        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);       User::factory()->create();
        // $personal = Category::create([

        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);
        // $hobbies = Category::create([

        //     'name' => 'Hobbies',
        //     'slug' => 'hobbies'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'batang lumatigo ng puday',
        //     'slug' => 'my-work-post',
        //     'excerpt' => 'as',
        //     'body' => 'body'
        // ]);
    }
}
