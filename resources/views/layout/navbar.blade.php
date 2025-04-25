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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/movieList.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/movieList.js') }}"></script>
</head>
<body>

@yield('content')

<script src="{{ asset('js/moviesList.js') }}"></script> <!-- Sửa đường dẫn JS -->
</body>
</html>

<?php
// $conn->close();
?>