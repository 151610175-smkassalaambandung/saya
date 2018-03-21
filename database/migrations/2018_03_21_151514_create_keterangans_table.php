<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeterangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterangans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('keadaan');
            $table->string('thnklr');
            $table->string('harga');
            $table->string('desk');

            $table->integer('sepeda_id')->unsigned();
            $table->foreign('sepeda_id')->references('id')->on('sepedas')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('keterangans');
    }
}
