<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialistProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialist_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('availability')->default(0);
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
        Schema::dropIfExists('specialist_profiles');
    }
}
