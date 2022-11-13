<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMembersTable extends Migration
{
    public function up()
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('subheading')->nullable();
            $table->longText('content')->nullable();
            $table->string('slug')->nullable();
            $table->integer('orderby')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
