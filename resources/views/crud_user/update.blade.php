<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin</title>
    <style>
        /* CSS từ update.html */
        body { font-family: Arial, sans-serif; background-color: #fff; margin: 0; padding: 0; display: flex; flex-direction: column; min-height: 100vh; }
        .header { background-color: #fff; border-bottom: 1px solid #000; padding: 10px; text-align: left; width: 100%; }
        .header a { color: blue; text-decoration: none; margin-right: 10px; }
        main { flex-grow: 1; display: flex; justify-content: center; align-items: center; }
        .form-container { background-color: #fff; border: 1px solid #000; width: 350px; padding: 20px; text-align: center; }
        .form-container h2 { font-weight: bold; margin-bottom: 20px; }
        .form-container label { display: block; margin-bottom: 5px; text-align: left; }
        .form-container input { width: 100%; padding: 5px; margin-bottom: 15px; border: 1px solid #000; }
        .form-container button { padding: 10px 20px; margin: 10px 5px; cursor: pointer; }
        .cancel-btn { background-color: #add8e6; border: none; }
        .update-btn { background-color: #0000ff; color: #fff; border: none; }
        .footer { background-color: #fff; border-top: 1px solid #000; padding: 10px; text-align: center; width: 100%; position: fixed; bottom: 0; }
    </style>
</head>
<body>
            <header>
                <nav>
                    <a href="{{ route('user.list') }}">Home</a> | <a href="{{ route('login') }}">Đăng nhập</a> |
                </nav>
            </header>

    <main>
        <div class="form-container">
            <h2>MÀN HÌNH CẬP NHẬT</h2>
            <form method="POST" action="{{ route('user.updateUser', $user->id) }}">
                @csrf
                @method('PUT')

                <label for="urlImg">Avata</label>
                @if($user->urlImg)
                    <img src="{{ asset('storage/' . $user->urlImg) }}" alt="Avatar" style="width: 100px; height: 100px; border-radius: 50%;"><br>
                @endif
                <input type="file" id="urlImg" name="urlImg" value="{{ $user->urlImg }}"><br>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="{{ $user->name }}"><br>
                <label for="age">Age</label>
                <input type="text" id="age" name="age" value="{{ $user->age }}"><br>
                <label for="facebook">Facebook</label>
                <input type="text" id="facebook" name="facebook" value="{{ $user->facebook }}"><br>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}"><br>
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password"><br>

                <button type="button" class="cancel-btn" onclick="window.location='{{ route('user.list') }}'">HỦY</button>
                <button type="submit" class="update-btn">CẬP NHẬT</button>
            </form>
        </div>
    </main>

    <footer>
        <p>Lập trình web @01/2024</p>
    </footer>
</body>
</html>
