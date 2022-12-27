<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_temps', function (Blueprint $table) {
            $table->id();
            $table->string('branch');
            $table->string('destination');
            $table->string('grade');
            $table->string('feeding');
            $table->string('accomodation');
            $table->string('transport');
            $table->string('allowance');
            $table->string('status');
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
        Schema::dropIfExists('travel_temps');
    }
}
