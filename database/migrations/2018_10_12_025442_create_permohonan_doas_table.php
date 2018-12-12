<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermohonanDoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_doas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ayat');
            $table->text('isi');
            $table->text('makna');
            $table->timestamps();
        });

        DB::table('permohonan_doas')->insert(
            array(
                'ayat' => 'Markus 11: 24',                
                'isi' => 'Karena itu Aku berkata kepadamu: apa saja yang kamu minta dan doakan, percayalah bahwa kamu telah menerimanya, maka hal itu akan diberikan kepadamu.',
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
        Schema::dropIfExists('permohonan_doas');
    }
}
