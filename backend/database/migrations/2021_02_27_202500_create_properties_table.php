<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string("title", 32)->nullable(false);
            $table->string("description", 64)->nullable(false);
            $table->integer("price")->nullable(false);
            $table->decimal("lat", 12, 9)->nullable(false);
            $table->decimal("lng", 12, 9)->nullable(false);
            $table->unsignedBigInteger("address_id")->nullable(false);
            $table->foreign('address_id')->references('id')->on('addresses');
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
        Schema::dropIfExists('properties');
    }
}