<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminapprovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminapprovals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('zone_id', 3);
            $table->string('circle_id', 3);
            $table->string('district_id', 3);
            $table->string('division_id', 5);
            $table->string('subdivision_id', 7);
            $table->string('scheme_id', 7);
            $table->string('approval_head', 3);
            $table->string('admin_approval_no', 25);
            $table->date('admin_approval_dt');
            $table->float('amount', 8,2);
            $table->float('wbank_amt', 8,2);
            $table->float('nrdwp_amt', 8,2);
            $table->float('state_amt', 8,2);

            $table->foreign('zone_id')->references('id')->on('zones');
            $table->foreign('circle_id')->references('id')->on('circles');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->foreign('subdivision_id')->references('id')->on('subdivisions');
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
        Schema::dropIfExists('adminapprovals');
    }
}
