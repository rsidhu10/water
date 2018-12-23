<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->string('id', 6)->unique();
            $table->string('zone_id', 3);
            $table->string('circle_id', 3);
            $table->string('district_id', 3);
            $table->string('block_name', 25);
            $table->string('block_pname', 25);
            $table->string('mis_block_id', 15);
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blocks');
    }
}
