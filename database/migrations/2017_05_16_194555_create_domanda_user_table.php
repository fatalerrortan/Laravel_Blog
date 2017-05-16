<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomandaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domanda_users', function (Blueprint $table){
            $table->increments('id');
            $table->string('fisrtname');
            $table->string('lastname');
            $table->string('skills');
            $table->string('department');
            $table->string('project');
            $table->binary('image');
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
        Schema::drop('domanda_users');
    }
}
