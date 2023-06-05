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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('tentang');
            $table->string('meta_keyword');
            $table->string('meta_description');
            $table->string('meta_author');
            $table->string('alamat');
            $table->string('tlp');
            $table->string('email');
            $table->string('facebook');
            $table->string('youtube');
            $table->string('twitter');
            $table->string('ig');
            $table->string('logo');
            $table->integer('hint_website');
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
        Schema::dropIfExists('settings');
    }
};
