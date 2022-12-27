<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commission_imports', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('policy_no');
            $table->string('policy_type');
            $table->string('policy_subtype');
            $table->string('term');
            $table->string('pay_frqncy');
            $table->string('prm_applied');
            $table->string('no_prm_applied');
            $table->string('comm_payable');
            $table->string('upload_by');
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
        Schema::dropIfExists('commission_imports');
    }
}
