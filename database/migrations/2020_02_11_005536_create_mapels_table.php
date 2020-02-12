<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->timestamps();
        });
        Schema::create('mapel_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_siswa');
            $table->foreign('id_siswa')->references('id')
                  ->on('siswas')->onDelete('cascade');

            $table->unsignedBigInteger('id_mapel');
            $table->foreign('id_mapel')->references('id')
                  ->on('mapels')->onDelete('cascade');

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
        Schema::dropIfExists('mapels');
        Schema::dropIfExists('mapel_siswa');
    }
}
