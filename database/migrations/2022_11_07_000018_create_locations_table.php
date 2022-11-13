<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location_country')->nullable();
            $table->string('location_phone')->nullable();
            $table->longText('location_address')->nullable();
            $table->string('location_addlink')->nullable();
            $table->integer('orderby')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
