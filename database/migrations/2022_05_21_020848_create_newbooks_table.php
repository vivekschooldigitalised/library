<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newbooks', function (Blueprint $table) {
            $table->id();
            $table->string('isbn')->nullable();
            $table->string('name')->nullable();
            $table->string('authors')->nullable();
            $table->string('publisher')->nullable();
            $table->string('language')->nullable();
            $table->string('edition')->nullable();
            $table->string('pages')->nullable();
            $table->string('prices')->nullable();
            $table->string('category')->nullable();
            $table->string('shelf')->nullable();
            $table->string('totalbooks')->nullable();
            $table->string('image')->nullable();
            $table->string('vendor')->nullable();
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
        Schema::dropIfExists('newbooks');
    }
}
