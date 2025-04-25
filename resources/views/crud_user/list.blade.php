@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
    <thead>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Email</th>
            <th>Orders</th> <!-- Thêm cột Orders -->
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
                @if ($user->orders->isNotEmpty())
                    {{ $user->orders->count() }} đơn hàng
                    (<a href="{{ route('orders.show', $user->id) }}">Xem chi tiết</a>)
                @else
                    <em>Không có đơn hàng</em>
                @endif
            </td>
            <td>
                @if (!empty($user->roles) && $user->roles->isNotEmpty())
                    {{ $user->roles->pluck('name')->implode(', ') }}
                @else
                    <em>Không có vai trò</em>
                @endif
            </td>
            <td>
                <a href="{{ route('user.updateUser', $user->id) }}">Edit</a>
                <a href="#" onclick="if(confirm('Bạn có chắc muốn xóa?')) { document.getElementById('delete-form-{{ $user->id }}').submit(); }">Delete</a>
                <form id="delete-form-{{ $user->id }}" action="{{ route('user.delete', $user->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
            </div>
        </div>
    </main>
@endsection
