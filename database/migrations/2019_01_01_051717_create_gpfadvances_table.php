<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGpfadvancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpfadvances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('year', 10);
            $table->string('category', 15);
            $table->string('gpf_no', 5)->nullable();
            $table->string('emp_name', 30);
            $table->string('emp_designation', 30);
            $table->float('amount', 8,2)->nullable();
            $table->tinyInteger('refundable');
            $table->string('motive')->nullable();
            $table->string('order_no', 10)->nullable();
            $table->date('order_dt')->nullable();
            $table->string('bill_no', 10)->nullable();
            $table->date('bill_dt')->nullable();
            $table->string('token_no', 10)->nullable();
            $table->string('tr_voucher_no', 10)->nullable();
            $table->date('tr_voucher_dt')->nullable();
            $table->string('cashbook_no', 10)->nullable();
            $table->date('cashbook_dt')->nullable();
            $table->longText('remarks')->nullable();
            $table->string('flaged', 1)->default(0);
            $table->date('retirement_dt')->nullable();
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
        Schema::dropIfExists('gpfadvances');
    }
}
