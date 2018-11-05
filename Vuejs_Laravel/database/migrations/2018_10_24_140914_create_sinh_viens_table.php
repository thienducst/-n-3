<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinhViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinh_vien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ho_ten');
            $table->string('gioi_tinh');
            $table->string('ngay_sinh');
            $table->string('mat_khau');
            $table->integer('sdt');
            $table->string('email');
            $table->string('ghi_chu');
            $table->smallInteger('trang_thai');
            $table->unsignedInteger('nganh_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sinh_viens');
    }
}
