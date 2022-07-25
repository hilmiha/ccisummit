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
        Schema::create('events', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('nama_event')->unique();
            $table->string('slug')->unique();
            $table->integer('harga')->unique()->nullable();

            $table->string('event_imgbg')->nullable();
            $table->string('event_imgtitle')->nullable();

            $table->string('penyelenggara')->nullable();
            $table->string('deskripsi_singkat')->nullable();
            $table->text('deskripsi_lengkap')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('gmap_link', 2083)->nullable();
            $table->date('tanggal')->nullable();
            $table->time('opengate_start')->nullable();
            $table->time('opengate_close')->nullable();

            $table->string('wa_1')->nullable();
            $table->string('wa_2')->nullable();
            $table->string('line')->nullable();

            $table->string('speaker1_name')->nullable();
            $table->string('speaker1_img')->nullable();
            $table->string('speaker1_desc')->nullable();

            $table->string('speaker2_name')->nullable();
            $table->string('speaker2_img')->nullable();
            $table->string('speaker2_desc')->nullable();

            $table->boolean('get_tak');
            $table->boolean('get_ecert');
            $table->boolean('get_modul');
            $table->boolean('get_snacks');
            $table->boolean('req_laptop');
            $table->boolean('req_ktm');
            $table->boolean('req_ticket');
            $table->integer('kode_status');

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
        Schema::dropIfExists('events');
    }
};
