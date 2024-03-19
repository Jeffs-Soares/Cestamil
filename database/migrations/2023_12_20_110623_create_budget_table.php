<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget', function (Blueprint $table) {
            $table->bigIncrements('id');             //********//
            $table->string('client', 128)->nullable(false);
            $table->date('date')->nullable(false);
            $table->unsignedBigInteger('product')->nullable(false);   //********//
            $table->float('additional')->nullable(true);
            $table->text('additional_products')->nullable(true);
            $table->unsignedBigInteger('region')->nullable(false);    //********//
            $table->tinyInteger('quantity')->nullable(false);
            $table->float('total_value')->nullable(false);
            $table->float('pay')->nullable(false);
            $table->float('remnant')->nullable(false);

            $table->foreign('product')->references('id')
                ->on('product')
                ->onDelete('cascade');

            $table->foreign('region')->references('id')
                ->on('region')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budget');
    }
}
