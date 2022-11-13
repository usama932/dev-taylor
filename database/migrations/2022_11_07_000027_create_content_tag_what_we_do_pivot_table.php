<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentTagWhatWeDoPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_tag_what_we_do', function (Blueprint $table) {
            $table->unsignedBigInteger('what_we_do_id');
            $table->foreign('what_we_do_id', 'what_we_do_id_fk_7583302')->references('id')->on('what_we_dos')->onDelete('cascade');
            $table->unsignedBigInteger('content_tag_id');
            $table->foreign('content_tag_id', 'content_tag_id_fk_7583302')->references('id')->on('content_tags')->onDelete('cascade');
        });
    }
}
