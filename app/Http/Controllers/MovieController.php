<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Movie; // Model Movie

/**
 * CRUD User controller
 */
class MovieController extends Controller
{
    public function movielist()
    {
        // Lấy danh sách phim từ cơ sở dữ liệu
        $movies = Movie::all();

       // Truyền dữ liệu đến view
        return view('crud_movies.movieList', compact('movies'));
    }
}
