<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domanda_questions', function (Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('keywords');
            $table->text('question');
            $table->string('target');
            $table->string('duration');
            $table->string('access');
            $table->string('project');
            $table->binary('file');
            $table->string('is_done');
            $table->string('owner');
            $table->string('contributor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('domanda_questions');
    }
}
