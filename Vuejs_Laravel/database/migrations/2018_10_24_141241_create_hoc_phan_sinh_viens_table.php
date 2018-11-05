<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHocPhanSinhViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocphan_sinhvien', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sinh_vien_id');
            $table->unsignedInteger('hoc_phan_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoc_phan_sinh_viens');
    }
}
