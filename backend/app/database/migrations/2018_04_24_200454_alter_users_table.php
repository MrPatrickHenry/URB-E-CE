<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {

        Schema::table('users', function ($table) {
            $table->string('account_type')->nullable();
            $table->string('business_name')->nullable();
            $table->string('devices')->nullable();
            $table->string('sdks')->nullable();
            $table->string('content_type')->nullable();
            $table->string('active')->nullable();
            $table->string('tier')->nullable();
            $table->string('business_title')->nullable();
            $table->string('business_logo')->nullable();
            $table->string('user_profile_avatar')->nullable();
            $table->string('sales_conversion')->nullable();
        });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
