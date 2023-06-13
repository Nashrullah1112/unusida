<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKknsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kkns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_mahasiswa');
            $table->string('data_kelompok');
            $table->string('tempat_kkn');
            $table->date('waktu_mulai');
            $table->date('waktu_berakhir');
            $table->string('maps');
            $table->string('program_kkn');
            
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
        Schema::dropIfExists('kkns');
    }
}
