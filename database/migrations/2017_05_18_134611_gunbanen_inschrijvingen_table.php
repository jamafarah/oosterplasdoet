<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GunbanenInschrijvingenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gunbanen_inschrijvingen', function(Blueprint $table) {
            $table->increments('id');
            $table->dateTime('Inschrijving_Tijd')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('Naam', 255);
            $table->string('Email',254);
            $table->string('TelefoonNummer',20)->nullable();
            $table->date('Geboortedatum');
            $table->string('Adres',254);
            $table->string('Studie',254)->nullable();
            $table->string('cv')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('signups');
    }
}
