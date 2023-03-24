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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string("image");
            $table->string("heading");
            $table->string("desc");
            $table->string("p1");
            $table->string("p2");
            $table->string("p3");
            $table->string("p4");
            $table->string("aboutPhoneNumber");
            $table->string("aboutEmailAddress");
            $table->string("aboutLocation");
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
        Schema::dropIfExists('abouts');
    }
};
