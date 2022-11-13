<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnowledgesTable extends Migration
{
    public function up()
    {
        Schema::create('knowledges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->longText('content')->nullable();
            $table->string('status')->nullable();
            $table->datetime('publish_date')->nullable();
            $table->integer('orderby')->nullable();
            $table->boolean('featured')->default(0)->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
