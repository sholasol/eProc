<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_requests', function (Blueprint $table) {
            $table->id();
            $table->string('reqNo');
            $table->string('user_id');
            $table->string('department');
            $table->string('dept_approval');
            $table->string('dept_remark');
            $table->string('proc_approval');
            $table->string('proc_remark');
            $table->string('fin_approval');
            $table->string('fin_remark');
            $table->string('cfo_approval');
            $table->string('cfo_remark');
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
        Schema::dropIfExists('main_requests');
    }
}
