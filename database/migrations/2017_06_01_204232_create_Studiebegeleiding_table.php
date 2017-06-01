
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiebegeleidingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studiebegeleiding', function(Blueprint $table) {
            $table->increments('id');
            $table->string('Naam', 255);
            $table->string('Email',254);
            $table->string('TelefoonNummer',20)->nullable();
            $table->date('Geboortedatum');
            $table->string('Adres',254);
            $table->string('Studie',254)->nullable();
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('studiebegeleiding');
    }
}
