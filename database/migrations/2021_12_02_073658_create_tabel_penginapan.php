<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelPenginapan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_penginapan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pulau_id');
            $table->string('nama_penginapan',30);
            $table->string('fasilitas',255);
            $table->integer('harga');
            $table->text('image');
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
        Schema::dropIfExists('tabel_penginapan');
    }
}
