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
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kode_obat');
            $table->integer('nama');
            $table->integer('id_jenis')->references('id')->on('jenis')->nullable()->constrained();
            $table->string('expired');
            $table->string('stok');
            $table->string('dosis');
            $table->date('photo');
            $table->string('harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat');
    }
};