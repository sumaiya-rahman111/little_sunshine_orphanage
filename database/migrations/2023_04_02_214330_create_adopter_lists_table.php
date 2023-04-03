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
        Schema::create('adopter_lists', function (Blueprint $table) {
            $table->id();
            $table->string('adopterId');
            $table->string('orphanId');
            $table->string('adopterName');
            $table->string('adopterEmail');
            $table->string('formNumber')->nullable();
            $table->string('spouseName')->nullable();
            $table->string('adopterAltMobile')->nullable();
            $table->string('adopterGender')->nullable();
            $table->string('image')->nullable();
            $table->string('adopterMobile');
            $table->string('adopterBan');
            $table->string('adopterNid');
            $table->string('adopterDob');
            $table->string('adopterPa');
            $table->string('adopterPeradd');
            $table->string('adopterReason');
            $table->string('adoptionStatus')->default('Processing');
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
        Schema::dropIfExists('adopter_lists');
    }
};
