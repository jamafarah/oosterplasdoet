<?php

use Illuminate\Database\Seeder;
use App\Sponsor;

class PartnerSeeder extends Seeder {

    public function run()
    {
        DB::table('sponsorpartner')->delete();

        // Sponsor
        Sponsor::create(array(
            'naam' => 'de biechten',
            'url' => 'http://debiechten.nl/',
            'type' => 'Partner',
            'beschrijving' => 'De Biechten faciliteert en denkt mee met allerlei activiteiten en het KEFO in het bijzonder',
            'img' => 'logo-de-biechten.png'
        ));
        Sponsor::create(array(
            'naam' => 'de poort',
            'url' => 'http://jc-de-poort.nl/',
            'type' => 'Partner',
            'beschrijving' => 'leveren materialen zoals podium en geluid voor KEFO. Ze werken mee aan de organisatie van de studie begeleiding',
            'img' => 'logo-de-poort.png'
        ));
        Sponsor::create(array(
            'naam' => 'den bosch oost',
            'url' => 'http://www.denboschoost.nl',
            'type' => 'Hoofd Sponsor',
            'beschrijving' => 'Het medisch centrum Oost is betrokken',
            'img' => 'logo-dierentehuis.png'
        ));
        Sponsor::create(array(
            'naam' => 'dierentehuis oosterplas',
            'url' => 'http://www.dierentehuisdenbosch.nl',
            'type' => 'Partner',
            'beschrijving' => 'Zij werken actief mee met de studie begeleiding',
            'img' => 'logo-drivers.png'
        ));
        Sponsor::create(array(
            'naam' => 'stichting divers',
            'url' => 'http://www.divers.nl/',
            'type' => 'Normale Sponsor',
            'beschrijving' => 'Volkstuinen Oosterplas is onder andere betrokken in de co-creatie rondom het KEFO',
            'img' => 'logo-ederatie.JPG'
        ));



    }
}