<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('item');
            $table->decimal('price')->nullable();
            $table->unsignedInteger('quantity');
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->string('department')->nullable();
            $table->string('dept_approval')->nullable();
            $table->text('dept_remark')->nullable();
            $table->string('proc_approval')->nullable();
            $table->text('proc_remark')->nullable();
            $table->string('fin_approval')->nullable();
            $table->text('proc_remark')->nullable();
            $table->string('cfo_approval')->nullable();
            $table->text('cfo_remark')->nullable();
            $table->string('final_approval')->nullable();
            $table->date('approval_date')->nullable();
            $table->text('description')->nullable();
            $table->string('reqNo');
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
        Schema::dropIfExists('requests');
    }
}
