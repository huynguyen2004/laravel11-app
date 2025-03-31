<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>
<nav class="navbar" style="display: flex; background-color: #e3f2fd; justify-content: center; padding: 10px 0;">
    <div style="display: inline-block;">
        <a href="#" style="">Home</a>
        <span style="margin: 0 5px;">|</span>
        @guest
            <a href="{{ route('login') }}" style="text-decoration: none; color: black;">Đăng nhập</a>
            <span style="margin: 0 5px;">|</span>
            <a href="{{ route('user.createUser') }}" style="">Đăng ký</a>
        @else
            <a href="{{ route('signout') }}" style="text-decoration: none; color: black;">Logout</a>
        @endguest
    </div>
</nav>

@yield('content')

    <footer style="text-align: center; padding-top: 10px; background-color:rgb(255, 255, 255); position: fixed; bottom: 0; width: 100%;">
        <p>Lập trình back end web 2 @2025</p>
    </footer>
</body>
</html>
