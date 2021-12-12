<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePatients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vaccine_id');
            $table->string('name');
            $table->string('nik');
            $table->string('alamat');
            $table->string('image_ktp');
            $table->string('no_hp');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_patients');
    }
}
