<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết vai trò</title>
</head>
<body>
    <h1>Chi tiết vai trò: {{ $role->name }}</h1>
    <h2>Danh sách người dùng:</h2>
    <ul>
        @foreach ($role->users as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
        @endforeach
    </ul>
    <a href="{{ route('users.index') }}">Quay lại danh sách người dùng</a>
</body>
</html>
