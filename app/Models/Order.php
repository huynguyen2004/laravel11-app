<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   public function list()
    {
        // Lấy danh sách tất cả người dùng và đơn hàng của họ
        $users = User::with('orders')->get();

        return view('user.list', compact('users'));
    }
}