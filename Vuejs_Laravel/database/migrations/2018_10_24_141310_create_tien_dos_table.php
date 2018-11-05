<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTienDosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tien_do', function (Blueprint $table) {
            $table->increments('id');
            $table->text('yeu_cau');
            $table->datetime('ngay_bat_dau');
            $table->datetime('ngay_ket_thuc');
            $table->text('noi_dung');
            $table->smallInteger('trang_thai');
            $table->unsignedInteger('nhom_dangki_id');
            $table->unsignedInteger('dang_ki_id');
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
        Schema::dropIfExists('tien_dos');
    }
}
