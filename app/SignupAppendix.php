<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SignupAppendix extends Model {

	protected $table = 'signup_appendices';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

    protected $fillable = ['first_name', 'last_name', 'birthdate'];

	public function signups()
	{
		return $this->belongsTo(Signup::class);
	}

}