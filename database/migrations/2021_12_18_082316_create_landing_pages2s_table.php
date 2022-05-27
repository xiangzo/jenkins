<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingPages2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_pages2s', function (Blueprint $table) {
            $table->id();
            $table->string('cta');
            $table->text('visi');
            $table->text('misi');
            $table->integer('no_hp');
            $table->string('email');
            $table->string('ig');
            $table->string('fb');
            $table->text('deskripsi');
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
        Schema::dropIfExists('landing_pages2s');
    }
}
