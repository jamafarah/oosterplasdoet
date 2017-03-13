<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('signups', function(Blueprint $table) {
			$table->foreign('event_id')->references('id')->on('events')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('signup_appendices', function(Blueprint $table) {
			$table->foreign('signup_id')->references('id')->on('signups')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('signups', function(Blueprint $table) {
			$table->dropForeign('signups_event_id_foreign');
		});
		Schema::table('signup_appendices', function(Blueprint $table) {
			$table->dropForeign('signup_appendices_signup_id_foreign');
		});
	}
}