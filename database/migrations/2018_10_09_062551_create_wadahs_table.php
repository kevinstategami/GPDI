<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWadahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wadahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ketua');
            $table->string('sekretaris');
            $table->string('bendahara');
            $table->string('seksi_acara');
            $table->string('seksi_musik');
            $table->string('seksi_konseling_doa');
            $table->string('jenis');

            $table->string('img_ketua')->nullable();            
            $table->string('img_sekretaris')->nullable();            
            $table->string('img_bendahara')->nullable();            
            $table->string('img_acara')->nullable();            
            $table->string('img_musik')->nullable();            
            $table->string('img_konseling_doa')->nullable();            
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
        Schema::dropIfExists('wadahs');
    }
}
