<?php
// // Kết nối cơ sở dữ liệu
// include 'db_connection.php';

// // Lấy danh sách phim từ cơ sở dữ liệu
// $sql = "SELECT * FROM movies";
// $result = $conn->query($sql);

// // Chuyển dữ liệu phim thành mảng PHP
// $movies = [];
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $movies[] = $row;
//     }
// }

// // Thêm một phim mặc định vào danh sách
// $movies[] = [
//     'id' => 4,
//     'title' => 'Tên phim',
//     'image' => 'path/to/default-image.jpg', // Đường dẫn ảnh mặc định
//     'release_date' => 'Đang cập nhật',
//     'trailer' => '#'
// ];
?>

@extends('layout.navbar')
@section('content')
<body>
    <div class="header">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="Cinestar Logo"> <!-- Sửa đường dẫn logo -->
        </div>
        <div class="menu">
            <a href="#">Chọn rạp</a>
            <a href="#">Lịch chiếu</a>
            <a href="#">Khuyến mãi</a>
            <a href="#">Thuê sự kiện</a>
            <a href="#">Tất cả các giải trí</a>
            <a href="#">Giới thiệu</a>
        </div>
        <div class="actions">
            <button class="btn-yellow">Đặt vé ngay</button>
            <button class="btn-purple">Đặt bắp nước</button>
            <input type="text" placeholder="Tìm phim, rạp" class="search-bar">
            <i class="fas fa-search search-icon"></i>
            <a href="#" class="login">Đăng nhập</a>
            <div class="language">
                <span>VN</span>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </div>
    <div class="container">
        <i id="prev-btn" class="arrow-btn-prev fas fa-chevron-left"></i>
        <div class="movie-grid" id="movie-grid">
            <!-- Nội dung phim sẽ được thêm bằng JavaScript -->
        </div>
        <i id="next-btn" class="arrow-btn-next fas fa-chevron-right"></i>
    </div>

<script>
    // Đưa biến PHP vào phạm vi toàn cục để dùng trong JS ngoài
    window.moviesFromPHP = @json($movies);
</script>

@endsection