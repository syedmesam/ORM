<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_company', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('companies_id');
            $table->unsignedBigInteger('events_id');
            $table->timestamps();

            $table->foreign('companies_id')->references('id')->on('companies');
            $table->foreign('events_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_company');
    }
}
