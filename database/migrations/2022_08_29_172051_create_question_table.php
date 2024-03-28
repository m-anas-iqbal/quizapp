<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('answer', 222);
            $table->integer('masks');
            $table->string('question', 222);
            $table->string('opt1', 222);
            $table->string('opt2', 222);
            $table->string('opt3', 222);
            $table->string('opt4', 222);
            $table->integer('subject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question');
    }
}
