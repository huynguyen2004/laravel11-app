<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS từ list.html */
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
            text-align: left;
            width: 100%;
        }

        .header a {
            color: blue;
            text-decoration: none;
            margin-right: 10px;
        }

        .container {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        h2 {
            font-weight: bold;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            border: 1px solid #000;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        td a {
            color: blue;
            text-decoration: none;
            margin-right: 10px;
        }

        .pagination {
            margin-top: 20px;
            text-align: center;
        }

        .pagination a {
            color: blue;
            text-decoration: none;
            margin: 0 5px;
        }

        .pagination a.active {
            font-weight: bold;
            text-decoration: underline;
        }

        .footer {
            background-color: #fff;
            border-top: 1px solid #000;
            padding: 10px;
            text-align: center;
            width: 100%;
            position: fixed;
            bottom: 0;
        }
    </style>
</head>

<body>
    <div class="header">
        <a href="{{ route('user.list') }}">Home</a> | <a href="{{ route('login') }}">Đăng xuất</a>
    </div>

    <div class="container">
        <h2>DANH SÁCH USER</h2>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Order</th>
                    <th>Role</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $index => $user)
                <tr>
                    <td>{{ $index + 1 + ($users->currentPage() - 1) * $users->perPage() }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                     <td>
                        <ul>
                            @foreach ($user->orders as $order)
                                <li>
                                    ID: {{ $order->id }},
                                    Tổng tiền: {{ $order->total_amount }},
                                    Địa chỉ: {{ $order->address }},
                                    Ngày tạo: {{ $order->created_at }}
                                </li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                      @if ($user->roles->isNotEmpty())
                            @foreach ($user->roles as $role)
                                <a href="{{ route('roles.show', $role->id) }}">{{ $role->name }}</a>
                                @if (!$loop->last)
                                    , <!-- Thêm dấu phẩy giữa các vai trò -->
                                @endif
                            @endforeach
                        @else
                            <em>Không có vai trò</em>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('user.updateUser', $user->id) }}">Edit</a>
                        <!-- Removed 'View' link as route does not exist -->
                        <a href="#">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $users->links('pagination::bootstrap-5') }}
        </div>
    </div>

    <div class="footer">
        <p>Lập trình web @01/2024</p>
    </div>
</body>

</html>
