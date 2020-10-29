<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotocyclesTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motocycles', function (Blueprint $table) {
            $table->id()->comment('編號');
            $table->foreignId('brand_id')->comment('車廠編號');
            $table->string('name')->comment('名稱');
            $table->string('kind')->comment('種類');
            $table->integer('hp')->unsigned()->comment('馬力');
            $table->float('nm')->unsigned()->comment('扭力');
            $table->integer('kg')->unsigned()->comment('重量');
            $table->timestamps();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motocycles');
    }
}
