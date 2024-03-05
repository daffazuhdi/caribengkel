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
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subdistrict_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('about');
            $table->string('address');
            $table->string('photo');
            $table->string('operational_hour');
            $table->string('phone_number');
            $table->integer('is_active');
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
