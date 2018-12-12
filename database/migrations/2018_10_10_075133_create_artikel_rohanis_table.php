<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelRohanisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel_rohanis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cover');
            $table->string('judul');
            $table->string('ayat');
            $table->text('isi');
            $table->integer('id_pembawa');            
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
        Schema::dropIfExists('artikel_rohanis');
    }
}
