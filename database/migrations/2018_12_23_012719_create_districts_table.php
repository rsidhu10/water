<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->string('id', 3)->unique();
            $table->string('zone_id', 3);
            $table->string('circle_id', 3);
            $table->string('district_name', 18);
            $table->string('district_pname', 18);
            $table->string('district_sname', 3);
            $table->integer('user_level', 3);
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
        Schema::dropIfExists('districts');
    }
}
