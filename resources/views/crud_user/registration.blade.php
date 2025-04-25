<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <style>
        /* CSS từ register.html */
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header {
            background-color: #fff;
            border-bottom: 1px solid #000;
            padding: 10px;
            text-align: center;
            width: 100%;
        }

        .header a {
            color: #000;
            text-decoration: none;
            margin: 0 10px;
        }

        .register-form {
            background-color: #fff;
            border: 1px solid #000;
            width: 350px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
        }

        .register-form h2 {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .register-form label {
            display: inline-block;
            width: 120px;
            text-align: right;
            margin-right: 10px;
        }

        .register-form input[type="text"],
        .register-form input[type="password"],
        .register-form input[type="email"] {
            width: 200px;
            padding: 5px;
            border: 1px solid #000;
            margin-bottom: 15px;
        }

        .register-form button {
            padding: 10px 20px;
            margin: 10px 5px;
            border: 1px solid #000;
            cursor: pointer;
        }

        .register-form .cancel-btn {
            background-color: #fff;
            color: #000;
        }

        .register-form .submit-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        .footer {
            background-color: #fff;
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="header">
        <a href="{{ route('user.list') }}">Home</a> | <a href="{{ route('login') }}">Đăng nhập</a> | Đăng ký
    </div>

    <div class="register-form">
        <h2>MÀN HÌNH ĐĂNG KÝ</h2>
        <form method="POST" action="{{ route('user.postUser') }}">
            @csrf
            <label for="username">Username</label>
            <input type="text" id="username" name="username"><br>
            <label for="age">Age</label>
            <input type="text" id="age" name="age"><br>
            <label for="facebook">Facebook</label>
            <input type="text" id="facebook" name="facebook"><br>
            <label for="email">Email</label>
            <input type="email" id="email" name="email"><br>
            <label for="password">Mật khẩu</label>
            <input type="password" id="password" name="password"><br>
            <button type="button" class="cancel-btn" onclick="window.location='{{ route('user.list') }}'">HỦY</button>
            <button type="submit" class="submit-btn">ĐĂNG KÝ</button>
        </form>
    </div>

    <div class="footer">
        <p>Lập trình web @01/2024</p>
    </div>
</body>

</html>
