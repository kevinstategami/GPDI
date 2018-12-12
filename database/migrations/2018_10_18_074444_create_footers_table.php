<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('contact');
            $table->text('isi');
            $table->timestamps();
        });

        DB::table('footers')->insert(
            array(
                'contact' => 'Markus 11: 24',                                
                'isi' =>'- Doa adalah senjata yang ampuh dalam berbagai hal dan masalah. Kirimkan PERMOHONAN DOA Saudara kepada kami. Kami siap mendukung Saudara dalam doa. Dengan Iman kami yakin Tuhan Yesus akan memberikan jawaban atas setiap doa saudara dan memberi jalan keluar buat setiap masalah Saudara. Tuhan Memberkati.',                                                
            )
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footers');
    }
}
