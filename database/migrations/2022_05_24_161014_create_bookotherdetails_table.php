<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookotherdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookotherdetails', function (Blueprint $table) {
            $table->id();
            $table->string('isbn_id')->nullable();
            $table->string('category')->nullable();
            $table->string('shelf')->nullable();
            $table->string('schoolbookid')->nullable();
            $table->string('bookseries')->nullable();
            $table->string('volume')->nullable();
            $table->string('purchasedate')->nullable();
            $table->string('billnumber')->nullable();
            $table->string('currency')->nullable();
            $table->string('currentprice')->nullable();
            $table->string('status')->nullable();
            $table->string('issuepermission')->nullable();
            $table->string('bookremarks')->nullable();
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
        Schema::dropIfExists('bookotherdetails');
    }
}
