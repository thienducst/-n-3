<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiangViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giang_vien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ho_ten');
            $table->string('mat_khau');
            $table->string('email');
            $table->string('sdt');
            $table->unsignedInteger('nganh_id');
            $table->unsignedInteger('chuc_vu_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giang_viens');
    }
}
