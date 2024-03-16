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
        //
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('car_brand_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('car_model_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('license_plate');
            // $table->date('last_service_date');
            $table->rememberToken();
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
        //
    }
};
