<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDickersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dickers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('partner_cd', 6);
            $table->string('trade_name', 255);
            $table->string('jan_code', 14)->nullable();
            $table->integer('stock_quantity');
            $table->integer('remaining_quantity')->default(0);
            $table->dateTime('dicker_limit_at');
            $table->text('memo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dickers');
    }
}
