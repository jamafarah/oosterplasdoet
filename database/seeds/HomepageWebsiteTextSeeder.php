

<?php

use Illuminate\Database\Seeder;

class HomepageWebsiteTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('website_text')->insert([
            'textarea_name' => 'homestudiebegeleiding',
            'content' => 'De begeleiding helpt je om je studie goed te kunnen volgen, je leert hoe je het beste kunt leren en je krijgt hiervoor coaching om zelfstandig aan de slag te kunnen. Je leert plannen en je krijgt begeleiding om je brugklas jaar goed aan te pakken. Dit alles vindt plaats bij de Biechten en er is tussentijds ook ruimte om even lekker te ontspannen of juist even te bewegen om daarna met hernieuwd concentratie weer verder te gaan.',
        ]);
        DB::table('website_text')->insert([
            'textarea_name' => 'homegunbanen',
            'content' => 'Het project \'gunbanen\' is een pilot. Verenigingen rondom de Oosterplas willen zich graag inzetten werkloze Bossche jongeren. Het doel is om hen aan een betaalde baan te krijgen. Jongeren zetten zich vrijwillig in bij één van de dertien verenigingen in Den Bosch Oost. Met behoud van hun uitkering, en zonder de sollicitatieplicht. In ruil voor het geleverde werk en getoonde motivatie gaat Oosterplas doet! na een half jaar binnen het netwerk van vijfduizend leden op zoek naar een betaalde baan.',
        ]);
    }
}
