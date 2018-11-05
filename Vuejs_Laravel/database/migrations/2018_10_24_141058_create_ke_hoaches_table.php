<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeHoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ke_hoach', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_ke_hoach');
            $table->text('ghi_chu');
            $table->unsignedInteger('giang_vien_id');
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
        Schema::dropIfExists('ke_hoaches');
    }
}
