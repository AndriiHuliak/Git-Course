<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;
use App\Models\Director;
use App\Models\Film;
use App\Models\Cinema;
use App\Models\Movie;
use App\Models\CinemaMovie;
use App\Models\User;
use App\Models\Project;
use App\Models\Task;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        #Author::factory(30)->create();
        #Book::factory(30)->create();
        #Director::factory(5)->create();
        #Film::factory(25)->create();
        #Cinema::factory(8)->create();
        #Movie::factory(30)->create();
        #CinemaMovie::factory(50)->create();
        User::factory(5)->create();
        Project::factory(10)->create();
        Task::factory(50)->create();
    }
}
