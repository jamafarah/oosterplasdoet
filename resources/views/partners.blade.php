@extends('layouts.app')


@section('content')

	<!-- Script voor het veranderen van de text -->
	<script type="text/javascript">
		function showText(titel, description)
		{
			text1=titel;
			text2=description
			var text4 = document.getElementById("1").innerHTML = text1;
		    var text3 = document.getElementById("2").innerHTML = text2;
		}
	</script>

	<!-- Banner bovenaan het scherm -->
	<div class="banner row-6 vague-green-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">
		 <img src="//www.oosterplasdoet.nl/wp-content/uploads/2016/11/Schermafbeelding-2016-11-02-om-22.13.56-e1478121477474.png" alt="" class="centered-logo">
	</div>

	<!-- Container voor de rest van de inhoud -->
	<div class="container" id="test2">

		<!-- Titel voor de pagina met bijbehorende text -->
		<div class="row">
			<div class="slogan" style="width: calc(100vw - 300px); background-color: white; min-height: 184px; margin-top: -60px; padding-top: 20px; text-align: center;"><h1 class="vague-green"><u>Samen werken met elkaar!</u></h1><p>Oosterplas werkt graag samen met initiatiefnemers, verenigingen, organisaties en bedrijven</p> <p>Wil jij ook deelnemen? stuur dan een bericht naar oosterplas@gmail.com</p></div>
		</div>
		
		<!-- Grid met afbeeldingen van alle bedrijven -->
		<div class="row sponsor-container green-background" style="background-color: #A9C80C;">
			<div class="col-md-8 sponsor-overview" style="margin-top: 10px;">
					<div class="row " style="margin-bottom: 10px;">

						<a href="http://debiechten.nl/" target="_blank"><img alt="de biechten" onmouseover='showText("Sociaal Cultureel Centrum de Biechten", "De Biechten faciliteert en denkt mee met allerlei activiteiten en het KEFO in het bijzonder");' src="{{asset('img/sponsoren/logo-de-biechten.png')}}" class="col-md-2" ></a>
						<a href="http://jc-de-poort.nl/" target="_blank"><img alt="de poort" onmouseover='showText("Jongerencentrum De Poort", "leveren materialen zoals podium en geluid voor KEFO. Ze werken mee aan de organisatie van de huiswerk begeleiding");' src="{{asset('img/sponsoren/logo-de-poort.png')}}" class="col-md-2" ></a>
						<a href="http://www.denboschoost.nl" target="_blank"><img alt="den bosch oost" onmouseover='showText("Medisch centrum Oost", "Het medisch centrum Oost is betrokken .....");' src="{{asset('img/sponsoren/logo-denboschoost.jpg')}}" class="col-md-2" ></a>
						<a href="http://www.dierentehuisdenbosch.nl" target="_blank"><img alt="dierentehuis oosterplas" onmouseover='showText("Dierentehuis Oosterplas", "Dierentehuis Den Bosch werkt met name samen in de co-creatie rondom het KEFO");' src="{{asset('img/sponsoren/logo-dierentehuis.png')}}" class="col-md-2" ></a>
						<a href="http://www.divers.nl/ target="_blank""><img alt="stichting divers" onmouseover='showText("Stichting Divers", "Zij werken actief mee met de huiswerk begeleiding");' src="{{asset('img/sponsoren/logo-drivers.png')}}" class="col-md-2" ></a>
						<a href="http://www.volkstuinendenbosch.nl" target="_blank"><img alt="volkstuinen oosterplas" onmouseover='showText("Volkstuinen Oosterplas", "olkstuinen Oosterplas is onder andere betrokken in de co-creatie rondom het KEFO");' src="{{asset('img/sponsoren/logo-ederatie.JPG')}}" class="col-md-2" ></a>
						
					</div>
					<div class="row" style="margin-bottom: 10px;">
					
						<a href="http://www.wladimirov.nl" target="_blank"><img alt="Wladimirov fitness en welness" onmouseover='showText("Wladimirov fitness en welness", "Wladimirov fitness en welness is onder andere betrokken in de co-creatie rondom het KEFO");' src="{{asset('img/sponsoren/logo-fitness.png')}}" class="col-md-2" ></a>
						<a href="https://www.s-hertogenbosch.nl/" target="_blank"><img alt="Gemeente" onmouseover='showText("Gemeente s-Hertogenbosch", "De gemeente is betrokken bij diverse activiteiten en ondersteund de Stichting wat bevestigd werd door de verkiezingen van de kamer van doen voor buurtinitiatieven");' src="{{asset('img/sponsoren/logo-gemeente.png')}}" class="col-md-2" ></a>
						<a href="http://www.hambaken-gym.nl/" target="_blank"><img alt="Vereniging Hambaken Gym" onmouseover='showText("Vereniging Hambaken Gym ", "Ze werken mee aan de huiswerk begeleiding en verzorgen kickboxen voor vrouwen in Hintham");' src="{{asset('img/sponsoren/logo-hambaken-gym.jpg')}}" class="col-md-2" ></a>
						<a href="http://www.hcdenbosch.nl" target="_blank"><img alt="Hockeyclub" onmouseover='showText("Hockeyclub s-Hertogenbosch", "De hockeyclub is onder andere betrokken in de co-creatie rondom het KEFO. Zij stellen ruimte ter beschikking voor de organisatie. Daarnaast zijn zij partner in sportactiviteiten rondom de Oosterplas");' src="{{asset('img/sponsoren/logo-hockeyclub.png')}}" class="col-md-2" ></a>
						<a href="https://www.kw1c.nl/" target="_blank"><img alt="KW1C" onmouseover='showText("KW1C (Koning Willem 1 College)", "Zij zorgen voor stagiaires en helpen mee bij het opzetten van het Leerwerkbedrijf");' src="{{asset('img/sponsoren/logo-koning-willem1.png')}}" class="col-md-2" ></a>
						<a href="http://www.modelbotenclub-titanic.nl" target="_blank"><img alt="modelboten club" onmouseover='showText("Titanic, modelboten club", "Titanic is onder andere betrokken in de co-creatie rondom het KEFO en stelt hun clubhuis ter beschikking als start- en eindpunt voor de activiteit: wandelen in de natuur");' src="{{asset('img/sponsoren/logo-modelbotenclub.jpg')}}" class="col-md-2" ></a>
					
					</div>
					<div class="row" style="margin-bottom: 10px;">
					
						<a href="http://www.stichting-oosterhoeve.nl" target="_blank"><img alt="Kind- en zorgboerderij Oosterhoeve" onmouseover='showText("Kind- en zorgboerderij Oosterhoeve", "Kind- en zorgboerderij Oosterhoeve is onder andere betrokken in de co-creatie rondom het KEFO");' src="{{asset('img/sponsoren/logo-oosterhoeve4.jpg')}}" class="col-md-2" ></a>
						<a href="http://www.s-port.nl" target="_blank"><img alt="S-Port" onmouseover='showText("S-Port", "S-Port is hoofdorganisator van de Baggerloop tijdens het Kom Erbij Festival Oosterplas");' src="{{asset('img/sponsoren/logo-s-port.png')}}" class="col-md-2" ></a>
						<a href="http://www.samenbeter.nl/home" target="_blank"><img alt="Gezondheidscentrum" onmouseover='showText("Gezondheidscentrum Samen Beter", "Participeren in sportimpuls aanvraag");' src="{{asset('img/sponsoren/logo-samen-beter.png')}}" class="col-md-2" ></a>
						<a href="http://www.toonlef.nl" target="_blank"><img alt="Toon Lef!" onmouseover='showText("Toon Lef!", "Mieke van der Sanden is het gezicht achter Toon Lef");' src="{{asset('img/sponsoren/logo-toonlef.png')}}" class="col-md-2" ></a>
						<a href="http://www.vanneynsel.nl/" target="_blank"><img alt="Park" onmouseover='showText("Park Eemwijk", "Deze ouderen zorgorganisatie (van Neynsel) is regelmatig betrokken bij Oosterplas Doet");' src="{{asset('img/sponsoren/logo-van-neysel.png')}}" class="col-md-2" ></a>
						<a href="http://www.vivent.nl/zorgcentra/vivent-hof-van-hintham" target="_blank"><img alt="Verzorgingstehuis" onmouseover='showText("Verzorgingstehuis Hof van Hintham (Vivent)", "Bieden plek voor een Gunbaner en werken mee met Wandel je fit");' src="{{asset('img/sponsoren/logo-vivent.png')}}" class="col-md-2" ></a>
						
					</div>
					<div class="row">
					
						<a href="https://www.weenerxl.nl/home/" target="_blank"><img alt="WeenerXL" onmouseover='showText("WeenerXL", "Zij werken mee aan het project gunbanen");' src="{{asset('img/sponsoren/logo-weenerxl.png')}}" class="col-md-2" ></a>
						<a href="http://www.wijkraadhintham.nl/" target="_blank"><img alt="Wijkraad" onmouseover='showText("Wijkraad Hintham", "Ze helpen actief mee met promotie en ondersteunen onze initiatieven op verschillende manieren");' src="{{asset('img/sponsoren/logo-wijkraad.png')}}" class="col-md-2" ></a>
						<a href="http://www.zv-oosterplas.nl" target="_blank"><img alt="Zeilvereniging" onmouseover='showText("Zeilvereniging Oosterplas", "De zeilvereniging is actief betrokken bij Oosterplas Doet door onder andere zitting te hebben in het bestuur van Oosterplas Doet en actief betrokken te zijn in de co-creatie rondom het KEFO");' src="{{asset('img/sponsoren/logo-zeilvereniging.jpg')}}" class="col-md-2" ></a>
						
						
					</div>
				</div>
				
			<!-- Text van elke organisatie -->
			<div class="col-md-4 orange-background">
				<h2 class="title" id="1">Naam van instantie</h2>
				<p class="info" id="2">Hier komt een beschrijving van de sponsor te staan. Hier vind je bijvoobeeld waarom het bedrijf of club een sponsor is en wat er is begedragen</p>
			</div>
		</div>
	</div>

@endsection