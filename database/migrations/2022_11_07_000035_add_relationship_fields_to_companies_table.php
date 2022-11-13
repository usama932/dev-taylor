<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCompaniesTable extends Migration
{
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->unsignedBigInteger('company_info_id')->nullable();
            $table->foreign('company_info_id', 'company_info_fk_7583879')->references('id')->on('content_pages');
        });
    }
}
