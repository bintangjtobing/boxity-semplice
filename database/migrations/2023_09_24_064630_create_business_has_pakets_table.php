<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessHasPaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_has_pakets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_business_id');
            $table->unsignedBigInteger('transaction_id');
            $table->date('expired_date');
            $table->timestamps();

            $table->foreign('owner_business_id')->references('id')->on('owner_businesses')->onDelete('cascade');
            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_has_pakets');
    }
}