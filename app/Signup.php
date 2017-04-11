<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Signup extends Model {

	protected $table = 'signups';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

    protected $fillable = ['emailaddress', 'first_name', 'last_name', 'birthdate'];

    public function event()
	{
		return $this->belongsTo(Event::class);
	}

	public function appendices()
	{
		return $this->hasMany(SignupAppendix::class);
	}

    /**
     * Get the full name
     * @return string Full name
     */
    public function getFullName() {
        return $this->first_name . ' ' . $this->last_name;
    }
}