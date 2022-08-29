<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('destination', 50);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->tinyInteger('nights')->unsigned();
            $table->string('host_structure', 50);
            $table->decimal('price', 7, 2);
            $table->tinyInteger('airport_transfer')->unsigned()->default(1);



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
