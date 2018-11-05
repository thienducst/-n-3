<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeTaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('de_tai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_de_tai');
            $table->text('noi_dung');
            $table->text('pham_vi');
            $table->smallInteger('so_luong');
            $table->text('ghi_chu');
            $table->integer('trang_thai');
            $table->string('loai_de_tai');
            $table->unsignedInteger('giang_vien_id');
            $table->unsignedInteger('hocki_nienkhoa_id');
            $table->unsignedInteger('nganh_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('de_tais');
    }
}
