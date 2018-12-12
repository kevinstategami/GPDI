<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeselamatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keselamatans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kata_pengantar');
            $table->string('ayat');
            $table->text('isi');
            $table->text('makna');
            $table->timestamps();
        });

        DB::table('keselamatans')->insert(
            array(
                'kata_pengantar' => '- Bila Saudara belum mengenal Yesus dan meragukan keselamatan Saudara, kami mengajak Anda untuk membaca dan merenungkan Firman Tuhan ini.',                
                'ayat' => 'Matius 20:21',                
                'isi' => 'Kata Yesus: "Apa yang kaukehendaki?" Jawabnya: "Berilah perintah, supaya kedua anakku ini boleh duduk kelak di dalam Kerajaan-Mu, yang seorang di sebelah kanan-Mu dan yang seorang lagi di sebelah kiri-Mu."',
                'makna' =>'- Doa adalah senjata yang ampuh dalam berbagai hal dan masalah. Kirimkan PERMOHONAN DOA Saudara kepada kami. Kami siap mendukung Saudara dalam doa. Dengan Iman kami yakin Tuhan Yesus akan memberikan jawaban atas setiap doa saudara dan memberi jalan keluar buat setiap masalah Saudara. Tuhan Memberkati.',                                                
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
        Schema::dropIfExists('keselamatans');
    }
}
