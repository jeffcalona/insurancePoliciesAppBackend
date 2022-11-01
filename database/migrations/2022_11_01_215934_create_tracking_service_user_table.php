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
        Schema::create('tracking_service_user', function (Blueprint $table) {
            $table->id();
            $table->dateTime('start');
            $table->dateTime('end');
            $table->integer('clickOnService')->default(1);

            $table->unsignedBigInteger('tracking_service_id')->nullable();
            $table->foreign('tracking_service_id')
            ->references('id')
                ->on('tracking_services')
                ->onDelete('set null')
                ->onUpdate('cascade');
                $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
            ->references('id')
                ->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('tracking_service_user');
    }
};
