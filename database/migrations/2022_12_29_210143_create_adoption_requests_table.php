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
        Schema::create('adoption_requests', function (Blueprint $table) {
            $table->id();
            $table->string('adptr_name');
            $table->string('adptr_email');
            $table->string('adptr_phone');
            $table->string('adptr_ban');
            $table->string('adptr_nid');
            $table->string('adptr_dob');
            $table->string('adptr_pr_add');
            $table->string('adptr_per_add');
            $table->string('adptr_roa');

            // orphan information inputs
            $table->string('orph_name');
            $table->string('orph_dob');
            $table->string('orph_fn')->nullable();
            $table->string('orph_mn')->nullable();
            $table->string('orph_on')->nullable();
            $table->string('orph_doa');
            $table->string('orph_oid');
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
        Schema::dropIfExists('adoption_requests');
    }
};
