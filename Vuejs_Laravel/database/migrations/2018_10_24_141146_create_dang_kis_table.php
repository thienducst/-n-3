<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDangKisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dang_ki', function (Blueprint $table) {
            $table->increments('id');
            $table->string('diem');
            $table->unsignedInteger('trang_thai');
            $table->unsignedInteger('sinh_vien_id');
            $table->unsignedInteger('de_tai_id');
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
        Schema::dropIfExists('dang_kis');
    }
}
