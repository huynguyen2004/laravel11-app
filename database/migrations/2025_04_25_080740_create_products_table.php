<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // id là khóa chính
            $table->string('name'); // Tên sản phẩm
            $table->string('image')->nullable(); // Đường dẫn ảnh (cho phép null)
            $table->decimal('price', 10, 2); // Giá sản phẩm
            $table->integer('quantity'); // Số lượng sản phẩm
            $table->text('description')->nullable(); // Mô tả sản phẩm
            $table->timestamps(); // created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
