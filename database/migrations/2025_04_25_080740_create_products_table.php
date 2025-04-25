<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable(); // Có thể lưu đường dẫn ảnh
            $table->decimal('price', 10, 2); // Giá, ví dụ: 999.99
            $table->integer('quantity'); // Số lượng tồn kho
            $table->text('description')->nullable();
            $table->timestamps(); // created_at, updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}