<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigTcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_tcs', function (Blueprint $table) {
            $table->id();
            $table->decimal('sell_value', 8, 4)->nullable();
            $table->decimal('buy_value', 8, 4)->nullable();
            $table->decimal('ext_sell_value', 8, 4)->nullable();
            $table->decimal('ext_buy_value', 8, 4)->nullable();
            $table->string('responsible')->nullable();
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
        Schema::dropIfExists('config_tcs');
    }
}
