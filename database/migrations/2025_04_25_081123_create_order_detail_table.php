<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailTable extends Migration
{
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id'); // Khóa ngoại tham chiếu đến bảng orders
            $table->unsignedBigInteger('product_id'); // Khóa ngoại tham chiếu đến bảng products
            $table->integer('quantity'); // Số lượng sản phẩm trong đơn hàng
            $table->text('notes')->nullable(); // Ghi chú
            $table->timestamps(); // created_at, updated_at

            // Khóa ngoại
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_detail');
    }
}