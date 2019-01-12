<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActualSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actual_salaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 6);
            $table->string('year',9);
            $table->float('gross_apr', 9,2)->nullable()->default(0);
            $table->float('tax_apr', 8,2)->nullable()->default(0);
            $table->float('gross_may', 9,2)->nullable()->default(0);
            $table->float('tax_may', 8,2)->nullable()->default(0);
            $table->float('gross_jun', 9,2)->nullable()->default(0);
            $table->float('tax_jun', 8,2)->nullable()->default(0);
            $table->float('gross_jul', 9,2)->nullable()->default(0);
            $table->float('tax_jul', 8,2)->nullable()->default(0);
            $table->float('gross_aug', 9,2)->nullable()->default(0);
            $table->float('tax_aug', 8,2)->nullable()->default(0);
            $table->float('gross_sep', 9,2)->nullable()->default(0);
            $table->float('tax_sep', 8,2)->nullable()->default(0);
            $table->float('gross_oct', 9,2)->nullable()->default(0);
            $table->float('tax_oct', 8,2)->nullable()->default(0);
            $table->float('gross_nov', 9,2)->nullable()->default(0);
            $table->float('tax_nov', 8,2)->nullable()->default(0);
            $table->float('gross_dec', 9,2)->nullable()->default(0);
            $table->float('tax_dec', 8,2)->nullable()->default(0);
            $table->float('gross_jan', 9,2)->nullable()->default(0);
            $table->float('tax_jan', 8,2)->nullable()->default(0);
            $table->float('gross_feb', 9,2)->nullable()->default(0);
            $table->float('tax_feb', 8,2)->nullable()->default(0);
            $table->float('gross_mar', 9,2)->nullable()->default(0);
            $table->float('tax_mar', 8,2)->nullable()->default(0);
            
            $table->foreign('emp_id')->references('id')->on('employees');
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
        Schema::dropIfExists('actual_salaries');
    }
}
