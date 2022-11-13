<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMenuitemsTable extends Migration
{
    public function up()
    {
        Schema::table('menuitems', function (Blueprint $table) {
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->foreign('menu_id', 'menu_fk_7534926')->references('id')->on('navigationmenus');
            $table->unsignedBigInteger('page_link_id')->nullable();
            $table->foreign('page_link_id', 'page_link_fk_7573184')->references('id')->on('content_pages');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id', 'parent_fk_7572782')->references('id')->on('menuitems');
        });
    }
}
