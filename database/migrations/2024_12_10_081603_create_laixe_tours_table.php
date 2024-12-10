<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaixeToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laixe_tours', function (Blueprint $table) {

            $table->id(); // ID tự tăng
            $table->string('ho_ten'); // Họ tên
            $table->date('ngay_sinh'); // Ngày sinh
            $table->string('so_dien_thoai'); // Số điện thoại
            $table->integer('so_nam_kinh_nghiem')->default(0); // Số năm kinh nghiệm
            $table->string('bien_so_xe')->unique(); // Biển số xe (duy nhất)
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
        Schema::dropIfExists('laixe_tours');
    }
}
