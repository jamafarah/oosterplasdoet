<?php

use Illuminate\Database\Seeder;
use App\WebsiteText;

class WebsiteTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('website_text')->delete();

        WebsiteText::create(array(
            'textarea_name' => 'gunbanen',
            'content' => '<h1 class="orange">Gunbanen</h1>
            <p>
                Gunbanen zijn tijdelijke opstapbanen voor jongeren in een uitkeringssituatie. Iedereen tussen de 18 en 27 jaar, thuiswonend of alleenstaand met of zonder kinderen, kan zich hiervoor aanmelden. We hebben diverse werkplaatsen waar je ervaring op kunt doen, waar je je CV mee in beweging kunt houden en mogelijk kan leiden tot een vaste baan bij hen of via hun netwerk.
                Ben jij, of ken je iemand die in een dergelijke situatie zit neem dan contact met ons op. We helpen je graag verder.
            </p>
                    <h2 class="orange">Doel</h2>
                    <p>
                        Werkloze jongeren aan de slag in een reguliere baan of terug naar school.
                    </p>


                    <h2 class="orange">Middelen</h2>
                    <p>
                        (maatschappelijk) participeren via het verenigingsleven/ZZP-ers in de stad in combinatie met coaching / ‘ondersteuning en gunning’ vanuit het verenigingsleven in de stad
                    </p>


                <h2 class="orange">uitgangspunten</h2>
                <p>
                    – Verenigingen in Den Bosch Oost adopteren werkloze jongere<p/>
                    – Jongere ‘wil wel maar kan niet’, (weet de weg niet, heeft het netwerk niet, scene-wisseling, ondersteunende ‘ferme hand’ van verenigingsbestuurders en -leden)<p/>
                    – Jongere doet zinvolle activiteiten binnen de vereniging / stichting (maatwerk, niet teveel “but’s and if’s” inregelen, structuur/verantwoordelijkheid/vertrouwen bieden)<p/>
                    – Inwoners aan zet, professionals stappen opzij en leveren ondersteuning op vraag van de inwoners of de jongere zelf<p/>
                    – Verenigingen zetten zich actief in voor hun jongeren<p/>
                    – Durft te innoveren en leren; lukt het wel dan een echte win-win-win-situatie, valt het tegen dan hebben we het in ieder geval op een nieuwe andere manier MET ELKAAR geprobeerd<p/>

                </p>'
        ));
        WebsiteText::create(array(
            'textarea_name' => 'homepagina',
            'content' => '<div class="slogan">
        <h1 class="green">We halen samen meer uit onze wijk!</h1>
        <p>
            Stichting OosterplasDOET! is er als wijkonderneming in de wijken ‘s-Hertogenbosch Oost en Hintham om mensen
            en
            organisaties te verbinden. Dit doen we door het coördineren en stimuleren van activiteiten op het gebied van
            onderwijs, arbeid, sport, cultuur en zorg & welzijn. Met als speerpunten huiswerkbegeleiding en
            gunbanen.
        </p>
    </div>'
        ));
        WebsiteText::create(array(
            'textarea_name' => 'partners',
            'content' => '<div class="row">
			<div class="slogan" style="width: calc(100vw - 300px); background-color: white; min-height: 184px; margin-top: -60px; padding-top: 20px; text-align: center;"><h1 class="vague-green"><u>Samen werken met elkaar!</u></h1><p>Oosterplas werkt graag samen met initiatiefnemers, verenigingen, organisaties en bedrijven</p> <p>Wil jij ook deelnemen? stuur dan een bericht naar oosterplas@gmail.com</p></div>
		</div>'
        ));
        WebsiteText::create(array(
            'textarea_name' => 'overons',
            'content' => '<div class="text" style="width: 70%; float: left;">
		<h1>Over ons...</h1>
		<p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren \'60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.</p>

		<p>Wil je meer weten?! Kijk dan op onze social media pagina\'s!</p>
		<a href="https://twitter.com/OosterplasDoet" target="_blank"><img src="{{asset(\'img/overons/twitter.png\')}}" alt="twitter"> <a href="https://twitter.com/OosterplasDoet"></a></img></a>
		<a href="https://nl-nl.facebook.com/OosterplasDoet/" target="_blank"><img src="{{asset(\'img/overons/facebook.png\')}}" alt="facebook"><a href="https://nl-nl.facebook.com/OosterplasDoet/"></a></img></a>

	</div>
	<div class="image" style="width: 29%; float: right;"><img src="//www.oosterplasdoet.nl/wp-content/uploads/2016/11/Schermafbeelding-2016-11-02-om-22.13.56-e1478121477474.png" alt="logo" style="width: 80%; height: auto; margin-top: 40px; margin-left: 20px;"></div>
'
        ));

    }
}
