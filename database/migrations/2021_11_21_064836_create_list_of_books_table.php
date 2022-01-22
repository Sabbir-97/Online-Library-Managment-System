<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListOfBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_of_books', function (Blueprint $table) {
            $table->id();

           
            $table->string('book_title');
            $table->string('category');
            $table->string('available_books');
            $table->string('description');
            $table->string('file');
            
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_of_books');
    }
}
