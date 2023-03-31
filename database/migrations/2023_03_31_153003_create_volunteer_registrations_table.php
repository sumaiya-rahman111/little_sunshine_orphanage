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
        Schema::create('volunteer_registrations', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("identype");
            $table->string("identity");
            $table->string("phone");
            $table->string("address");
            $table->string("op1")->nullable();
            $table->string("op2")->nullable();
            $table->string("op3")->nullable();
            $table->string("op4")->nullable();
            $table->string("op5")->nullable();
            $table->string("image");
            $table->string("status")->default('n');
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
        Schema::dropIfExists('volunteer_registrations');
    }
};
