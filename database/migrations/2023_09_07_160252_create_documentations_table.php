<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('business_owners_id');
            $table->unsignedInteger('link_id');
            $table->timestamps();

            $table->foreign('business_owners_id')->references('id')->on('business_owners');
            $table->foreign('link_id')->references('id')->on('file_storages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentations');
    }
}
