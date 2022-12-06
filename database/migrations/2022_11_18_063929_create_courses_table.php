<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('fee');
            $table->string('descount')->nullable();
            $table->string('status')->nullable();
            $table->string('review')->nullable();
            $table->string('skill_level');
            $table->string('language');
            $table->string('students')->nullable();
            $table->string('assessments');
            $table->text('description');
            $table->text('certification');
            $table->text('learning_outcomes');
           
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
        Schema::dropIfExists('courses');
    }
}
