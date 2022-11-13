<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToLocationsTable extends Migration
{
    public function up()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->unsignedBigInteger('contact_info_id')->nullable();
            $table->foreign('contact_info_id', 'contact_info_fk_7572921')->references('id')->on('content_pages');
        });
    }
}
