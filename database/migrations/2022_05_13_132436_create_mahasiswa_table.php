<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswanew', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nim');
            $table->string('nama', 100);
            $table->string('gender', 100);
            $table->string('jurusan', 100);
            $table->string('bidang_minat', 100);
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
        Schema::dropIfExists('mahasiswa');
    }
}
