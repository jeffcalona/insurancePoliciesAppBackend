<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.ls
     * 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobertura_juridicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
            ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->string('plan');
            $table->integer('price');
            $table->string('fullNameP');
            $table->integer('identificationP');
            $table->string('directionP');
            $table->integer('phoneP');
            $table->integer('nitC');
            $table->string('directionC');
            $table->string('cityC');
            $table->string('procedureTipe');
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