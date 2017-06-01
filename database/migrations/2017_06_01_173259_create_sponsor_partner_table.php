<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorPartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsorpartner', function(Blueprint $table) {
            $table->increments('id');
            $table->string('naam', 200);
            $table->string('type', 30);
            $table->string('url', 255);
            $table->string('img', 255);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('sponsorpartner');
    }
}
