<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietKehoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiet_kehoach', function (Blueprint $table) {
            $table->increments('id');
            $table->text('noi_dung');
            $table->datetime('thoigian_batdau');
            $table->datetime('thoigian_ketthuc');
            $table->text('ghi_chu');
            $table->unsignedInteger('ke_hoach_id');
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
        Schema::dropIfExists('chitiet_kehoaches');
    }
}
