<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelWisata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_wisata', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pulau_id');
            $table->string('nama_wisata',30);
            $table->integer('biaya');
            $table->string('image',225);
            $table->string('fasilitas',255);
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
        Schema::dropIfExists('tabel_wisata');
    }
}
