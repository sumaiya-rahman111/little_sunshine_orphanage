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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('staff_name')->nullable();
            $table->string('post')->nullable();
            $table->string('email')->nullable();
            $table->date('birthDate')->nullable();
            $table->string('birth_Mark')->nullable();
            $table->string('perm_address')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('alt_contact')->nullable();
            $table->integer('service_status')->nullable();
            $table->date('joining_date')->nullable();
            $table->string('NID')->nullable();
            $table->string('passport')->nullable();
            $table->string('resume')->nullable();
            $table->string('photo')->nullable();
            $table->integer('gender')->nullable();
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
        Schema::dropIfExists('staff');
    }
};
