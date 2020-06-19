<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCagnoliniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cagnolini', function (Blueprint $table) {

            $table -> id();
            $table ->string("nome");
            $table ->string("cognome");
            $table ->string("address");
            $table ->string("code");
            $table ->string("state");
            $table ->string("phone_number");
            $table ->string("role");
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cagnolini');
    }
}
