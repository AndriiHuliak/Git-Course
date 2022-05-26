<?php

use Illuminate\Support\Facades\Route;
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



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $authors = Author::all();
    $books = Book::all();

    /*foreach($authors as $author){
        echo 'Author name: '.$author['name'].'<br>';
        echo 'Book: '.$author->book['name'].'<br>';
        echo '______________<br>';
    }*/

    /*foreach($books as $book){
        echo 'Book name: '.$book['name'].'<br>';
        echo 'Book: '.$book->author['name'].'<br>';
        echo '______________<br>';
    }*/

    $directors = Director::all();
    $films = Film::all();

    /*foreach($directors as $director){
        echo 'Director name: '.$director['name'].'<br>';
        echo '<b>Films: </b><br>';
        foreach($director->films as $film){
            echo $film['name'].'<br>';
        }
        echo '______________<br>';
    }*/

    /*foreach($films as $film){
        echo 'Films name: '.$film['name'].'<br>';
        echo '<b>Director: </b> '. $film->director['name'] .'<br>';
        echo '______________<br>';
    }*/

    $cinemas = Cinema::all();
    $movies = Movie::all();

    /*foreach($cinemas as $cinema){
        echo 'Cinema name: '.$cinema['name'].'<br>';
        echo '<b>Movie: </b><br>';
        foreach($cinema->movies as $movie){
            echo $movie['name'].'<br>';
        }
        echo '______________<br>';
    }*/
    $movies = Movie::all();

    foreach($movies as $movie){
        echo 'Movie name: '.$movie['name'].'<br>';
        echo '<b>Cinemas:</b><br>';
        foreach($movies->cinemas as $cinema){
            echo $cinema['name'].'<br>';
        }
        echo '______________<br>';
    }

    $users = User::all();

    /*foreach($users as $user){
        echo 'User name: '.$user['name'].'<br>';
        echo '<b>Tasks:</b><br>';
        foreach($user->tasks as $task){
            echo $task['name'].'<br>';
        }
        echo '______________<br>';
    }*/

});
