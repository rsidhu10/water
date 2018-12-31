<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisions', function (Blueprint $table) {
            $table->string('id', 5);
            $table->string('zone_id', 3);
            $table->string('circle_id', 3);
            $table->string('district_id', 3);
            $table->string('division_name', 25);
            $table->string('division_pname', 25);
            $table->string('user_level', 3);
            
            $table->foreign('zone_id')->references('id')->on('zones');
            $table->foreign('circle_id')->references('id')->on('circles');
            $table->foreign('district_id')->references('id')->on('districts');
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
        Schema::dropIfExists('divisions');
    }
}
