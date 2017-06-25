<?php



namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class MailListContact extends Model
{
    use SoftDeletes;
    protected $table = 'mailinglistcontacts';
    public $timestamps = true;


    protected $fillable = [
        'Naam',
        'Email'
    ];




}
