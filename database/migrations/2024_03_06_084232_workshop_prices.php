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
        Schema::create('workshop_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('workshop_id')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('price');
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
