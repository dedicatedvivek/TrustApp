<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAWebsiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant', function (Blueprint $table) {
            $table->string('first name');
            $table->string('last name');
            $table->string('date of birth');
            $table->string('gender');
            $table->string('Nationality');
            $table->string('address');
            $table->string('city');
            $table->string('pincode');
            $table->string('category');
            $table->string('status');
            $table->string('email address');
            $table->string('phone number');
            $table->file('Add Document');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicant');
    }
}
