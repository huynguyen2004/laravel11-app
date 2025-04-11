<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie; // Import model Movie

class MovieController extends Controller
{
    /**
     * Hiển thị danh sách phim.
     */
    public function index()
    {
        // Lấy danh sách phim từ cơ sở dữ liệu
        $movies = Movie::all(); // Hoặc sử dụng paginate nếu cần phân trang

        // Trả về view danh sách phim với dữ liệu
        return view('crud_movie.movieList', compact('movies'));
    }
}