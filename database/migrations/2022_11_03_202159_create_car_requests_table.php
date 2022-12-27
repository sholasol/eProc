<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_requests', function (Blueprint $table) {
            $table->id();
            $table->string('reqNo');
            $table->string('user_id');
            $table->string('department');
            $table->string('req_date');
            $table->string('req_time');
            $table->string('from');
            $table->string('destination');
            $table->string('additional_information');
            $table->string('dept_approval')->nullable();
            $table->string('dept_remark')->nullable();
            $table->string('tran_approval')->nullable();
            $table->string('tran_remark')->nullable();
            $table->string('assignee')->nullable();
            $table->string('vehicle_no')->nullable();
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
        Schema::dropIfExists('car_requests');
    }
}
