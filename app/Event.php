<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model {

	protected $table = 'events';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function signups()
	{
		return $this->hasMany('Signup', 'event_id');
	}

}