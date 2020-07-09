<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl-price', function (Blueprint $table) {
            $table->id();
            $table->string('label_package', 50);
            $table->bigInteger('real_price', 0);
            $table->bigInteger('discount_price')->nullable();
            $table->integer('total_users');
            $table->json('features')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl-price');
    }
}
