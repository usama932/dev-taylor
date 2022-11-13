<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageCustomFieldsTable extends Migration
{
    public function up()
    {
        Schema::create('page_custom_fields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('field_lable');
            $table->string('field_value');
            $table->string('type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
