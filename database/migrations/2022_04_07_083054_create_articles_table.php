<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->string('name');
            $table->string('excerpt');
            $table->longText('slug');
            $table->string('header_1');
            $table->longText('passage_1');
            $table->string('header_2');
            $table->longText('passage_2');
            $table->string('header_3');
            $table->longText('passage_3');
            $table->string('header_4');
            $table->longText('passage_4');
            $table->string('header_5');
            $table->longText('passage_5');
            $table->string('header_6');
            $table->longText('passage_6');
            $table->string('image');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
