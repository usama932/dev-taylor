<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPageCustomFieldsTable extends Migration
{
    public function up()
    {
        Schema::table('page_custom_fields', function (Blueprint $table) {
            $table->unsignedBigInteger('page_id')->nullable();
            $table->foreign('page_id', 'page_fk_7572411')->references('id')->on('content_pages');
            $table->unsignedBigInteger('what_we_do_id')->nullable();
            $table->foreign('what_we_do_id', 'what_we_do_fk_7584119')->references('id')->on('what_we_dos');
            $table->unsignedBigInteger('case_study_custom_id')->nullable();
            $table->foreign('case_study_custom_id', 'case_study_custom_fk_7584120')->references('id')->on('case_studies');
            $table->unsignedBigInteger('knowledge_custom_id')->nullable();
            $table->foreign('knowledge_custom_id', 'knowledge_custom_fk_7584121')->references('id')->on('knowledges');
            $table->unsignedBigInteger('team_custom_id')->nullable();
            $table->foreign('team_custom_id', 'team_custom_fk_7584122')->references('id')->on('team_members');
        });
    }
}
