<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 6);
            $table->string('designation_id',3);
            $table->string('month',3);
            $table->string('year',4);
            $table->float('gross_pay', 9,2)->nullable()->default(0);
            $table->float('income_tax', 8,2)->nullable()->default(0);
            
            $table->foreign('emp_id')->references('id')->on('employees');
            $table->foreign('designation_id')->references('id')
            ->on('designations');
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
        Schema::dropIfExists('salaries');
    }
}
