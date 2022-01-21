<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('lead');
            $table->text('content');
            $table->integer('city_id')->nullable();
            $table->string('img');
            $table->unsignedSmallInteger('favorite')->default('0');
            $table->timestamps();


            $table->foreign('city_id', 'post_city_fk')->on('cities')->references('id')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');


    }


}
