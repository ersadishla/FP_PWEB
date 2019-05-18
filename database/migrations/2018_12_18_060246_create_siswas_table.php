<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('nisn')->nullable();
            $table->string('nik');
            $table->string('nama');
            $table->string('agama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jeniskelamin');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('telepon');

            $table->string('ayah')->nullable();
            $table->string('ibu')->nullable();
            $table->string('wali')->nullable();

            $table->string('sekolah_asal')->nullable();
            $table->string('sekolah1')->nullable();
            $table->string('sekolah2')->nullable();
            $table->string('sekolah3')->nullable();

            $table->integer('status')->nullable();
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
        Schema::dropIfExists('siswas');
    }
}
