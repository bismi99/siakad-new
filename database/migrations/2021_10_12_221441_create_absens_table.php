<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('krs_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('jadwal_id');
            $table->unsignedBigInteger('tahunakademik_id');
            $table->integer('p1')->nullable()->default(0);
            $table->integer('p2')->nullable()->default(0);
            $table->integer('p3')->nullable()->default(0);
            $table->integer('p4')->nullable()->default(0);
            $table->integer('p5')->nullable()->default(0);
            $table->integer('p6')->nullable()->default(0);
            $table->integer('p7')->nullable()->default(0);
            $table->integer('p8')->nullable()->default(0);
            $table->integer('p9')->nullable()->default(0);
            $table->integer('p10')->nullable()->default(0);
            $table->integer('p11')->nullable()->default(0);
            $table->integer('p12')->nullable()->default(0);
            $table->integer('p13')->nullable()->default(0);
            $table->integer('p14')->nullable()->default(0);
            $table->integer('p15')->nullable()->default(0);
            $table->integer('p16')->nullable()->default(0);
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
        Schema::dropIfExists('absens');
    }
}
