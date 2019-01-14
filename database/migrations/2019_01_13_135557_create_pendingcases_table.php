<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendingcasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendingcases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('zone_id', 3);
            $table->string('circle_id', 3);
            $table->string('division_id', 5);
            $table->string('letter_no', 15);
            $table->date('letter_dt');
            $table->string('category_id', 15);
            $table->string('gpf_no', 5)->nullable();
            $table->string('emp_code', 5)->nullable();
            $table->string('emp_name', 30);
            $table->string('designation_id', 30);
            $table->date('retirement_date');
            $table->date('Received_on');
            $table->string('relatesto');
            $table->string('case_status');

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
        Schema::dropIfExists('pendingcases');
    }
}
