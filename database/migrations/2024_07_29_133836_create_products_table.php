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
        Schema::create('products', function (Blueprint $table) { //Schema holo kon id varchar (25), primery
            $table->id();
            $table->string("name");
            $table->string("barcode");
            $table->string("description");//->comment("current time and date ");
            $table->integer("status")->comment("1 for active 2 for inactive")->default(1);
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
        Schema::dropIfExists('products');
    }
};
