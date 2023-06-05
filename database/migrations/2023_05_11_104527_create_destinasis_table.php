<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug')->nullable();
            $table->integer('kategori_id');
            $table->string('alamat');
            $table->string('lokasi');
            $table->string('gambar');
            $table->string('gambar1');
            $table->string('gambar2');
            $table->int('dilihat');
            $table->int('tiket');
            $table->int('harga_tiket');
            $table->text('deskripsi');
            $table->string('deskripsi_singkat');
            $table->integer('hint_destinasi');
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
        Schema::dropIfExists('destinasis');
    }
};
