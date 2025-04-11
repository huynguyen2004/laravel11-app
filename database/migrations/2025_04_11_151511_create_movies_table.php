<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); // Tự động tạo cột id (primary key)
            $table->string('title'); // Cột title kiểu string
            $table->text('description')->nullable(); // Cột description kiểu text, cho phép null
            $table->string('image')->nullable(); // Cột image kiểu string, cho phép null
            $table->date('release_date')->nullable(); // Cột release_date kiểu date, cho phép null
            $table->string('trailer')->nullable(); // Cột trailer kiểu string, cho phép null
            $table->timestamps(); // Tự động tạo cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies'); // Xóa bảng movies nếu rollback
    }
}
