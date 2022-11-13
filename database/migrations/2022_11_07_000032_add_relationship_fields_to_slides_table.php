<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSlidesTable extends Migration
{
    public function up()
    {
        Schema::table('slides', function (Blueprint $table) {
            $table->unsignedBigInteger('slider_id')->nullable();
            $table->foreign('slider_id', 'slider_fk_7552457')->references('id')->on('sliders');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id', 'parent_fk_7552491')->references('id')->on('slides');
            $table->unsignedBigInteger('slidesid_id')->nullable();
            $table->foreign('slidesid_id', 'slidesid_fk_7573308')->references('id')->on('content_pages');
        });
    }
}
