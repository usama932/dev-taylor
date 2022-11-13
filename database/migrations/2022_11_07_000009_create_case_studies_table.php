<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseStudiesTable extends Migration
{
    public function up()
    {
        Schema::create('case_studies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->longText('content')->nullable();
            $table->string('featuredtitle')->nullable();
            $table->string('cta_button')->nullable();
            $table->string('cst_link')->nullable();
            $table->boolean('featured')->default(0)->nullable();
            $table->string('status')->nullable();
            $table->string('slug')->nullable();
            $table->integer('orderby')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
