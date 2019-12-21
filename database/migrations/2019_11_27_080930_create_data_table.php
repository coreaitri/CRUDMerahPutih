<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 20);
            $table->string('username', 20);
            $table->string('password', 30);
            $table->date('tanggal_lahir');
            $table->string('usia');
            $table->text('alamat')->nullable();
            $table->string('kecamatan');
            $table->string('telephone', 14);
            $table->string('email', 100);
            $table->text('foto')->nullable();
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
        Schema::dropIfExists('data');
    }
}
