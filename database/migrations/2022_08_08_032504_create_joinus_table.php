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
        Schema::create('joinus', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('pass')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('bday')->nullable();
            $table->string('country')->nullable();
            $table->string('gender')->nullable();
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
        Schema::dropIfExists('joinus');
    }
};
