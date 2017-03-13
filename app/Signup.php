<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Signup extends Model {

	protected $table = 'signups';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function event()
	{
		return $this->belongsTo('Event', 'event_id');
	}

	public function appendices()
	{
		return $this->hasMany('SignupAppendix', 'signup_id');
	}

}