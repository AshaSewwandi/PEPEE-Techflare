<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('animal_id');
            $table->string('type');
            $table->string('age');
            $table->string('location')->nullable();
            $table->string('vaccination')->nullable();
            $table->mediumText('image')->nullable();
            $table->string('sex')->nullable();
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')->references('post_id')->on('posts');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
