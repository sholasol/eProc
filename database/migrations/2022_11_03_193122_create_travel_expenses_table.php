<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_expenses', function (Blueprint $table) {
            $table->id();
            $table->string('reqNo');
            $table->string('user_id');
            $table->string('department');
            $table->string('destination');
            $table->string('duration');
            $table->string('departure');
            $table->string('return_date');
            $table->string('total_expense');
            $table->string('bank');
            $table->string('acc_no');
            $table->string('acc_name');
            $table->string('additional_information');
            $table->string('dept_approval')->nullable();
            $table->string('dept_remark')->nullable();
            $table->string('proc_approval')->nullable();
            $table->string('proc_remark')->nullable();
            $table->string('fin_approval')->nullable();
            $table->string('fin_remark')->nullable();
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
        Schema::dropIfExists('travel_expenses');
    }
}
