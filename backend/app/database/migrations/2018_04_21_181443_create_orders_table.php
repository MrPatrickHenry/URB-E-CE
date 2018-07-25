<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('todays_date');
            $table->integer('accountID');
            $table->string('agency_name');
            $table->string('contact_name');
            $table->string('contact_title');
            $table->dateTime('ad_start_date');
            $table->dateTime('ad_end_date');
            $table->string('ad_descritpion');
            $table->string('ad_format');
            $table->integer('ad_duration');
            $table->dateTime('device');
            $table->dateTime('os');
            $table->string('interest');
            $table->string('ad_offer_payout');
            $table->string('whitelist');
            $table->string('blacklist');
            $table->integer('pegi');
            $table->string('payment');
            $table->integer('paid');
            $table->string('signature_digital');
            $table->string('signature_digital_date');
            $table->string('payment_t_and_c');




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
        Schema::dropIfExists('orders');
    }
}
