<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporting', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('downloads');
            $table->float('starttime');
            $table->integer('endtime');
            $table->integer('assetid');
            $table->integer('sdk_id');
            $table->string('devices');
            $table->string('location');
            $table->integer('sessionID');
            $table->integer('publisherID');
            $table->integer('bundle_ID');
            $table->integer('content_type');
            $table->string('catchall')->nullable();
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
        Schema::dropIfExists('reporting');
    }
}
