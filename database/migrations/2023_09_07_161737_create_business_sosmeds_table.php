<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessSosmedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_sosmeds', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->text('url');
            $table->unsignedInteger('business_owners_id');
            $table->timestamps();

            $table->foreign('business_owners_id')->references('id')->on('business_owners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_sosmeds');
    }
}
