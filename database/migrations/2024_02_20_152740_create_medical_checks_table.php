<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_checks', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('user_id');
            $table->text('description')->nullable();
            $table->string('chronic_illness')->nullable();
            $table->text('past_hospital')->nullable();
            $table->string('past_surgry')->nullable();
            $table->string('past_B_transfusion')->nullable();
            $table->string('drug_history')->nullable();
            $table->string('last_menst_period')->nullable();
            $table->string('no_pregnacy')->nullable();
            $table->string('no_delivery')->nullable();
            $table->string('no_children')->nullable();
            $table->string('no_miscarrage')->nullable();
            $table->string('allergies')->nullable();
            $table->string('organ_donor')->nullable();
            $table->string('blood_type')->nullable();
            $table->boolean('completed')->default(false);
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
        Schema::dropIfExists('medical_checks');
    }
}
