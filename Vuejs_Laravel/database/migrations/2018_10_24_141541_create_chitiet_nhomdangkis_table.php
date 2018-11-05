<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietNhomDangKisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiet_nhomdangki', function (Blueprint $table) {
            $table->increments('id');
            $table->string('diem');
            $table->smallInteger('trang_thai');
            $table->unsignedInteger('sinh_vien_id');
            $table->unsignedInteger('nhom_dangki_id');
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
        Schema::dropIfExists('chi_tiet_nhom_dang_kis');
    }
}
