<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketplacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketplaces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_business_id');
            $table->unsignedBigInteger('marketplace_type_id');
            $table->text('link');
            $table->timestamps();

            $table->foreign('owner_business_id')->references('id')->on('owner_businesses')->onDelete('cascade');
            $table->foreign('marketplace_type_id')->references('id')->on('marketplace_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marketplaces');
    }
}