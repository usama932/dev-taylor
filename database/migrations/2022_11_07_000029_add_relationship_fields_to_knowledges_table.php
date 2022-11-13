<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToKnowledgesTable extends Migration
{
    public function up()
    {
        Schema::table('knowledges', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id', 'category_fk_7552254')->references('id')->on('knowledge_categories');
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->foreign('tag_id', 'tag_fk_7552255')->references('id')->on('knowledge_tags');
        });
    }
}
