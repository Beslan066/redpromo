<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('posts', function (Blueprint $table) {

            $table->unsignedBigInteger('city_id')->nullable(); //добавляем поле ID категории, ведь каждму посту соответсвует категория


            $table->foreign('city_id')->on('posts')->references('id')->onDelete('cascade'); // даем форейн ключ
        });

        Schema::table('posts', function (Blueprint $table) {

            $table->unsignedBigInteger('category_id')->nullable(); //добавляем поле ID категории, ведь каждму посту соответсвует категория


            $table->foreign('category_id')->on('posts')->references('id')->onDelete('cascade'); // даем форейн ключ
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
