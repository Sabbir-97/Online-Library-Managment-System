<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovedusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvedusers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_address');
            $table->string('password');
            $table->string('dob');
            $table->string('gender');
            $table->string('religion');
            $table->string('payment_method');
            $table->string('transaction_id');






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
        Schema::dropIfExists('approvedusers');
    }
}
