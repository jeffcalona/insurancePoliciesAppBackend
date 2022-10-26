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
        Schema::create('cobertura_juridicas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('plan');
            $table->integer('price');
            $table->string('fullNameP');
            $table->integer('identificationP');
            $table->string('directionP');
            $table->integer('phoneP');
            $table->integer('nitC');
            $table->string('directionC');
            $table->string('cityC');
            $table->string('datePro')->nullable();
            $table->string('timePro')->nullable();
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
        Schema::dropIfExists('cobertura_juridicas');
    }
};