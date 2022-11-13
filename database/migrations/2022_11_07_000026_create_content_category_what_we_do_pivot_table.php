<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentCategoryWhatWeDoPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_category_what_we_do', function (Blueprint $table) {
            $table->unsignedBigInteger('what_we_do_id');
            $table->foreign('what_we_do_id', 'what_we_do_id_fk_7583298')->references('id')->on('what_we_dos')->onDelete('cascade');
            $table->unsignedBigInteger('content_category_id');
            $table->foreign('content_category_id', 'content_category_id_fk_7583298')->references('id')->on('content_categories')->onDelete('cascade');
        });
    }
}
