<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->integer("question_id");
            $table->tinyInteger("is_correct");
            $table->string("answer");
            $table->string("sound");
            $table->integer("sound_duration")->description("sound duration in secends");
            $table->text("description");
            $table->integer("timedelay")->description("time for wait after answer");
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
        Schema::dropIfExists('answers');
    }
}
