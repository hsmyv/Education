<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_informations', function (Blueprint $table) {
            $table->id();
            $table->string('slot1_title');
            $table->text('slot1_description');
            $table->string('slot2_title');
            $table->text('slot2_description');
            $table->string('slot3_title');
            $table->text('slot3_description');
            $table->string('picture_title');
            $table->text('picture_body');
            $table->string('video_title');
            $table->text('video_description');
            $table->string('video_slot1_title');
            $table->text('video_slot1_description');
            $table->string('video_slot2_title');
            $table->text('video_slot2_description');
            $table->string('video_slot3_title');
            $table->text('video_slot3_description');
            $table->string('video_slot4_title');
            $table->text('video_slot4_description');
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
        Schema::dropIfExists('about_informations');
    }
}
