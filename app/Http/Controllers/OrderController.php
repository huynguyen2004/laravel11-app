<?php

namespace App\Http\Controllers;

use App\Models\User;

class OrderController extends Controller
{
    public function showByUser($user_id)
    {
        $user = User::with('orders.orderDetails.product')->findOrFail($user_id);
        return view('orders.show', compact('user'));
    }
}