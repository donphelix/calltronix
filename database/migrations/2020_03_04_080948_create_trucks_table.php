<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('driver_name', 100);
            $table->bigInteger('driver_phone_number');
            $table->string('company_name', 100);
            $table->string('owner_name', 100);
            $table->string('owner_email', 100);
            $table->string('truck_model', 100);
            $table->string('truck_registration', 100);
            $table->string('truck_chassis_number', 100);
            $table->string('truck_engine_number', 100);
            $table->string('truck_mileage', 100);
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
        Schema::dropIfExists('trucks');
    }
}
