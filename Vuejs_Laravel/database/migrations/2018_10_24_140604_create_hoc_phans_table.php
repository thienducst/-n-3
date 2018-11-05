<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHocPhansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoc_phan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_hoc_phan');
            $table->string('ma_hoc_phan');
            $table->string('ma_lop');
            $table->string('ten_lop');
            $table->unsignedInteger('hk_nk_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoc_phans');
    }
}
