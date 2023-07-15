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
        Schema::create('form_pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_pt');
            $table->string('alamat_pt');
            $table->string('email')->unique();
            $table->string('no_telp')->unique();
            $table->string('pengajuan');
            $table->string('deskripsi');
            $table->string('status')->default('backlog');
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
        Schema::dropIfExists('form_pengajuans');
    }
};
