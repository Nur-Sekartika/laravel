<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_profil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nama',30);
            $table->string('Alamat',30);
            $table->string('Agama',10);
            $table->date('TTL');
            $table->BigInteger('Handphone');
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
        Schema::dropIfExists('table_profil');
    }
}
