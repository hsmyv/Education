<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('post_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('user_id')->constrained()->cascadeOnDelete();
            $table->integer('parent_id')->index()->nullable();
            $table->string('commentable_user')->nullable();
            $table->integer('commentable_id')->unsigned();
            $table->string('commentable_type');
            $table->text('body');
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
        Schema::dropIfExists('comments');
    }
}
