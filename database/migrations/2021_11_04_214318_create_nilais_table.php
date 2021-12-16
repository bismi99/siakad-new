<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('krs_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('jadwal_id');
            $table->unsignedBigInteger('tahunakademik_id');
            $table->integer('nilai_absen')->nullable()->default(0);
            $table->integer('nilai_tugas')->nullable()->default(0);
            $table->integer('nilai_uts')->nullable()->default(0);
            $table->integer('nilai_uas')->nullable()->default(0);
            $table->integer('nilai_akhir')->nullable()->default(0);
            $table->string('nilai_huruf')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('jadwal_id')->references('id')->on('jadwals')->onDelete('cascade');
            $table->foreign('krs_id')->references('id')->on('krs')->onDelete('cascade');
            $table->foreign('tahunakademik_id')->references('id')->on('tahun_akademiks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilais');
    }
}
