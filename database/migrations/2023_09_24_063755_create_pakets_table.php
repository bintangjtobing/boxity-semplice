<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paket_type_id');
            $table->string('name', 100);
            $table->integer('duration');
            $table->string('price', 45);
            $table->integer('max_upload_product');
            $table->integer('max_upload_testimonial');
            $table->timestamps();

            $table->foreign('paket_type_id')->references('id')->on('paket_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pakets');
    }
}