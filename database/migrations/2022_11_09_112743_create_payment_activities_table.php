<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_activities', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');
            $table->bigInteger('basic');
            $table->bigInteger('total_allowance');
            $table->bigInteger('total_deduction');
            $table->bigInteger('gross');
            $table->bigInteger('loan');
            $table->bigInteger('loan_payment');
            $table->bigInteger('net_salary');
            $table->bigInteger('tax');
            $table->bigInteger('tax_value');
            $table->bigInteger('grand_deduction');
            $table->string('grade');
            $table->string('code');
            $table->integer('month');
            $table->integer('year');
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
        Schema::dropIfExists('payment_activities');
    }
}
