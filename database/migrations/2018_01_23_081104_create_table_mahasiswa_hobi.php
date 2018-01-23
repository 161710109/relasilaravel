<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMahasiswaHobi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobi.php', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_mahasiswa')->references('id')->on('mahasiswa')->onDelete('CASCADE');
            $table->unsignedInteger('id_hobi');
            $table->foreign('id_hobi')->references('id')->on('hobi')->onDelete('CASCADE');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hobi.php');
    }
}
