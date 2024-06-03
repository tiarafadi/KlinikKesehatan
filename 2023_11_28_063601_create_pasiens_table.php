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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('namapasien');
            $table->string('kodepasien');
            $table->string('namadokter');
            $table->date('lahir');
            $table->string('agama');
            $table->string('status');
            $table->string('jeniskelamin');
            $table->string('telepon', 20);
            $table->string('alamat');
            
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
        Schema::dropIfExists('pasiens');
    }
};