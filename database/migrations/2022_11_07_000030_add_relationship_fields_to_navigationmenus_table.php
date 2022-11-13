<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToNavigationmenusTable extends Migration
{
    public function up()
    {
        Schema::table('navigationmenus', function (Blueprint $table) {
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id', 'parent_fk_7564989')->references('id')->on('navigationmenus');
        });
    }
}
