<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('imagetitle')->nullable();
            $table->longText('description')->nullable();
            $table->string('cta_button')->nullable();
            $table->string('url')->nullable();
            $table->string('status')->nullable();
            $table->integer('orderby')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
