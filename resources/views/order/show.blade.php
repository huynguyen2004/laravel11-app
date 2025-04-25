<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng của {{ $user->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Chi tiết đơn hàng của {{ $user->name }}</h2>
        @if ($user->orders->isNotEmpty())
            @foreach ($user->orders as $order)
                <div class="card mb-3">
                    <div class="card-header">
                        Mã đơn hàng: {{ $order->id }}
                    </div>
                    <div class="card-body">
                        <p><strong>Tổng số tiền:</strong> {{ number_format($order->total_amount, 2) }} VNĐ</p>
                        <p><strong>Địa chỉ:</strong> {{ $order->address }}</p>
                        <h5>Danh sách sản phẩm:</h5>
                        @if ($order->orderDetails->isNotEmpty())
                            <ul>
                                @foreach ($order->orderDetails as $detail)
                                    <li>
                                        {{ $detail->product->name }} - Số lượng: {{ $detail->quantity }}
                                        @if ($detail->notes)
                                            (Ghi chú: {{ $detail->notes }})
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>Không có sản phẩm trong đơn hàng này.</p>
                        @endif
                    </div>
                </div>
            @endforeach
        @else
            <p>Người dùng này chưa có đơn hàng nào.</p>
        @endif
        <a href="{{ route('user.list') }}" class="btn btn-primary">Quay lại danh sách</a>
    </div>
</body>
</html>