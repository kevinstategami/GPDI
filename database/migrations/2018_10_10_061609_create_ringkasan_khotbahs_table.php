<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRingkasanKhotbahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ringkasan_khotbahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cover');
            $table->string('judul');
            $table->string('ayat');
            $table->text('isi');
            $table->integer('id_pembawa');
            $table->string('pembuat');
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
        Schema::dropIfExists('ringkasan_khotbahs');
    }
}
