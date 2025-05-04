<?php
 use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id(); // Tự động tạo cột 'id' (bigint unsigned auto_increment)
            $table->string('name'); // Cột 'name' kiểu string
            $table->text('description')->nullable(); // Cột 'description' kiểu text, có thể null
            $table->timestamps(); // Tự động thêm 'created_at' và 'updated_at'
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
