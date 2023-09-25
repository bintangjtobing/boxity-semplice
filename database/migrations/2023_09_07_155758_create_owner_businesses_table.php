<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_businesses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->text('url')->nullable();
            $table->text('photo')->nullable();
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->text('link_location')->nullable();
            $table->boolean('is_show_location')->default(false)->nullable();
            $table->string('whatsapp_number', 45)->nullable();
            $table->string('phone_number', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owner_businesses');
    }
}