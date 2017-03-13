<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSignupsTable extends Migration {

	public function up()
	{
		Schema::create('signups', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('event_id')->unsigned();
			$table->string('first_name', 255);
			$table->string('last_name', 255);
			$table->date('birthdate');
			$table->timestamps();
			$table->softDeletes();
			$table->string('emailaddress', 255);
		});
	}

	public function down()
	{
		Schema::drop('signups');
	}
}