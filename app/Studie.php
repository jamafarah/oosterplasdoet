<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 May 2017 19:17:00 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GunbanenInschrijvingen
 *
 * @property int $id
 * @property \Carbon\Carbon $Inschrijving_Tijd
 * @property string $Naam
 * @property string $Email
 * @property string $TelefoonNummer
 * @property \Carbon\Carbon $Geboortedatum
 * @property string $Adres
 * @property string $Studie
 * @property string $cv
 *
 * @package App\Models
 */
class Studie extends Model
{
    use SoftDeletes;
    protected $table = 'studiebegeleiding';
    public $timestamps = true;

    protected $dates = [
        'Geboortedatum'
    ];

    protected $fillable = [
        'Naam',
        'Email',
        'TelefoonNummer',
        'Geboortedatum',
        'Adres',
        'Studie'
    ];




}
