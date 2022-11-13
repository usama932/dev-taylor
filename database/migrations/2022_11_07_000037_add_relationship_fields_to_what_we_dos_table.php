<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToWhatWeDosTable extends Migration
{
    public function up()
    {
        Schema::table('what_we_dos', function (Blueprint $table) {
            $table->unsignedBigInteger('case_study_id')->nullable();
            $table->foreign('case_study_id', 'case_study_fk_7583305')->references('id')->on('case_studies');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id', 'parent_fk_7583299')->references('id')->on('content_pages');
        });
    }
}
