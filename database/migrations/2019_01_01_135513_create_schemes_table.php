<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schemes', function (Blueprint $table) {
            $table->string('id',5);
            $table->string('zone_id', 3);
            $table->string('circle_id', 3);
            $table->string('district_id', 3);
            $table->string('division_id', 5);
            $table->string('subdivision_id', 7);
            $table->string('block_id', 6);
            $table->string('scheme_name', 50);
            $table->string('scheme_pname', 50);
            $table->string('lpcd',3);
            $table->string('swap',3);
            $table->string('own_by',5);
            $table->string('operated_by',10);
            $table->string('coverage_status',2);
            $table->string('functional',3);
            $table->string('multi_village',3);
            $table->string('source',10);

            $table->foreign('zone_id')->references('id')->on('zones');
            $table->foreign('circle_id')->references('id')->on('circles');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->foreign('subdivision_id')->references('id')->on('subdivisions');
            $table->foreign('block_id')->references('id')->on('blocks');

            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schemes');
    }
}
