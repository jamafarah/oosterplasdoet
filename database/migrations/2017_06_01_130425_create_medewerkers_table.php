<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedewerkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medewerkers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('naam', 55);
            $table->string('rol', 200);
            $table->text('beschrijving', 1000);
            $table->string('img', 255);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('medewerkers');
    }
}
