<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhatWeDosTable extends Migration
{
    public function up()
    {
        Schema::create('what_we_dos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->longText('excerpt')->nullable();
            $table->longText('page_text')->nullable();
            $table->string('cta_button_text')->nullable();
            $table->string('cta_url')->nullable();
            $table->string('status')->nullable();
            $table->string('slug')->nullable();
            $table->integer('order_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
