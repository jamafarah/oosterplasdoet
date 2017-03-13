<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSignupAppendicesTable extends Migration {

	public function up()
	{
		Schema::create('signup_appendices', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('signup_id')->unsigned();
			$table->string('first_name', 255);
			$table->string('last_name', 255);
			$table->date('birthdate');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('signup_appendices');
	}
}