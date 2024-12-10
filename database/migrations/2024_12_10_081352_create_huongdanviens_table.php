<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huongdanviens', function (Blueprint $table) {
            $table->id(); // ID tự tăng
            $table->string('ten', 100); // Tên hướng dẫn viên
            $table->string('email')->unique(); // Email duy nhất
            $table->string('sodienthoai', 15); // Số điện thoại
            $table->string('diachi', 255)->nullable(); // Địa chỉ
            $table->date('ngaysinh')->nullable(); // Ngày sinh
            $table->string('gioitinh', 10)->nullable(); // Giới tính
            $table->string('anhdaidien')->nullable(); // Ảnh đại diện
            $table->integer('sonamkinhnghiem')->default(0); // Số năm kinh nghiệm
            $table->string('bangcap')->nullable(); // Bằng cấp
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('huongdanviens');
    }
};
