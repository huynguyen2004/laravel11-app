<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Phim</title>
    <!-- Link Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/styleList.css') }}">
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="Cinestar Logo">
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
            @foreach ($movies as $movie)
                <div class="movie-card">
                    <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}">
                    <h3 class="movie-title">{{ $movie->title }}</h3>
                    <p>Khởi chiếu: {{ $movie->release_date ?? 'Đang cập nhật' }}</p>
                    <div class="movie-actions">
                        <button onclick="window.open('{{ $movie->trailer }}', '_blank')">Xem Trailer</button>
                        <button onclick="window.location.href='movieDetail.php?id={{ $movie->id }}'">Tìm Hiểu Thêm</button>
                    </div>
                </div>
            @endforeach
        </div>
        <i id="next-btn" class="arrow-btn-next fas fa-chevron-right"></i>
    </div>
    <!-- Link JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>