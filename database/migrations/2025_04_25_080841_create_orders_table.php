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
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // id là khóa chính
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // user_id là khóa ngoại liên kết với bảng users
            $table->decimal('total_amount', 10, 2); // Tổng số tiền, định dạng số thập phân
            $table->string('address'); // Địa chỉ
            $table->timestamps(); // Tự động thêm cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
