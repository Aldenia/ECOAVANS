<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('donorName');
            $table->string('donationType');
            $table->bigInteger('incomes_id')->unsigned()->index();

            $table->foreign("incomes_id")->references("id")->on("income")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('donation');
    }
}