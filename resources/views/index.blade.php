@extends('layouts.app')


@section('content')
    <div class="banner row-6 green-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">
        <img src="{{ asset('/img/overons/oosterplas_transparant.png') }}" alt="" class="centered-logo">
    </div>
<div class="container raised">
        {!! $content->content !!}
    <div class="services">
        <div class="serviceBlock col-xs-12 col-md-6">
            <div class="image" style="background-image: url(http://wvua23.com/wp-content/uploads/2015/04/school-stock.jpg)">

            </div>
            <div class="blurred contentPane">
                <h3 class="orange">Studie begeleiding</h3>
                <p>
                {!! $studiebegeleiding->content !!}
                    <!--De begeleiding helpt je om je studie goed te kunnen volgen, je leert hoe je het beste kunt leren en je krijgt hiervoor coaching om zelfstandig aan de slag te kunnen.
                    Je leert plannen en je krijgt begeleiding om je brugklas jaar goed aan te pakken. Dit alles vindt plaats bij de Biechten en er is tussentijds ook ruimte om even lekker
                    te ontspannen of juist even te bewegen om daarna met hernieuwd concentratie weer verder te gaan.
                    -->
                </p>
                <button class="more orange-background">Lees meer</button>
            </div>
        </div>

        <div class="serviceBlock col-xs-12 col-md-6 green-background">
            <div class="image" style="background-image: url(http://i.telegraph.co.uk/multimedia/archive/03219/stock-photos-vince_3219813k.jpg)">

            </div>
            <div class="blurred contentPane">
                <h3 class="green">Gunbanen</h3>
                <p>
                    {!! $gunbanen->content !!}
                    <!--â€œHet project 'gunbanen' is een pilot. Verenigingen rondom de Oosterplas willen zich graag inzetten werkloze Bossche jongeren.
                    Het doel is om hen aan een betaalde baan te krijgen. Jongeren zetten zich vrijwillig in bij Ã©Ã©n van de dertien verenigingen in Den Bosch Oost.
                    Met behoud van hun uitkering, en zonder de sollicitatieplicht.
                    In ruil voor het geleverde werk en getoonde motivatie gaat Oosterplas doet! na een half jaar binnen het netwerk van vijfduizend leden op zoek naar een betaalde baan.â€�
                    -->
                </p>
                <button class="more orange-background">Lees meer</button>
            </div>
        </div>

    </div>
</div>
    <div class="banner row-3 orange-background" >
        <h1 class="white">Higlights/Activiteiten</h1>
    </div>
<div class="container">
        <div class="row highlightRow">
            @if (count($events) > 0)
                @foreach ($events AS $events)
                    <div class="col-xs-12 col-md-4 row-6 highlightBlock">

                        <div class="row image thumbnail" style="background-image: url({{ asset('/img/evenementen/Standaard.png') }})"></div>
                        <h2 class="orange title">{{ $events->name }}</h2>
                        <h3 class="title">begint op: &nbsp</h3><h3 class="orange date">{{ Carbon::createFromFormat('Y-m-d H:i:s', $events->startDate)->format('H:i d-m-Y') }}</h3>
                        <p>{!! $events->intro !!}</p>
                        <a class="button more orange-background" href="{{ route('eventShow', $events->id) }}">Lees meer</a>
                    </div>
                @endforeach
            @else
                <p>Geen evenementen gevonden</p>
            @endif
        </div>
</div>
    <div class="banner row-3 orange-background" >
        <h1 class="white">Nieuws</h1>
    </div>
    <div class="container">
        <div class="row highlightRow">
            @if (count($news) > 0)
                @foreach ($news AS $news)
                    <div class="col-xs-12 col-md-4 row-6 highlightBlock">

                        <div class="row image thumbnail" style="background-image: url({{ asset('/img/nieuws/' . $news->img) }})"></div>
                        <h2 class="orange title">{{ $news->title }}</h2>
                        <h3 class="orange date">Geplaatst op: &nbsp; &nbsp; &nbsp;{{ Carbon::createFromFormat('Y-m-d H:i:s', $news->created_at)->format('H:i d-m-Y') }}</h3>
                        <p>{!! $news->intro !!}</p>
                        <a class="button more orange-background" href="{{ route('newsShow', $news->id) }}">Lees meer</a>
                    </div>
                @endforeach
            @else
                <p>Geen nieuws gevonden</p>
            @endif
        </div>
    </div>
    <div class="banner row-3 orange-background" >
        <h1 class="white"><a id="contact"></a>Socialmedia/Contact</h1>
    </div>
    <div class="container social-contact">
        <div class="row">
            <div class="col-xs-12 col-md-6 row-5 text-center socialmedia-block">
                <div>
                    <a href="https://www.facebook.com/OosterplasDoet">
                        <i class="fa fa-5x fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/oosterplasdoet">
                        <i class="fa fa-5x fa-twitter"></i>
                    </a>
                    <p>Volg ons op op faceboook en twitter om op de hoogte te blijven</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 row-5">
                <p>
                    Wij zoeken graag naar feedback voor onze site en organiatie. <br>
                    Heb jij nog feedback of een idee voor ons? Laat dan hier achter. <br>
                    <br>
                    Vul evenuteel je naam en email adres in zodat wij je terug kunnen mailen!
                </p>
                <form class="feedback-form" action="#">
                    <label for="name">naam: </label><input placeholder="naam" name="naam" type="text"><br>
                    <label for="email">email: </label><input placeholder="email" name="email" type="email"><br>
                    <textarea placeholder="uw bericht" rows="7" cols="50"></textarea><br>
                    Wij zijn je zeer dankbaar! <input class="orange-background" value="verzend" type="submit">
                </form>
            </div>
        </div>
    </div>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


    <!-- REAL Footer by Alex -->
    <div class="rainbow no-padding">
        <img class="home-img" src="img/rainbow.png">
    </div>

	<div class="col-xs-12 col-md-12 green-background" id="indexFooter">
        <div class="all green-background">
            <div class="col-md-1"></div>
            <br>    
            <div class="col-md-3" style="border-right : 2px solid white;">
                <div class="address">
                    <h3>Stichting OosterplasDOET!<br></h3>
                    <div class="infolist">
                        <h3><br>Adres:</h3>
                        <dd class="address">
                            <p translate="no" itemscope="" itemtype="http://schema.org/PostalAddress">
                                Vincent van Goghlaan 1 Rosmalen<br>
                                5246 GA
                            </p>
                        </dd>
                    </div>
                    <h3>RSIN nummer:</h3> 855080528<br>
                    <h3>KvK nummer:</h3> 63073579<br>
                    <h3>SBI-code:</h3> 88993<br>
                    <h3><br>Emailadres:</h3>oosterplasdoet@gmail.com<br><br>
                </div>
            </div>
            <div class="col-md-2">
                <div class="links col-md-auto">
                    <h3>Over OosterplasDOET!:</h3>
                    <a href="/about">Over ons</a><br>
                    <a href="/about">Duurzaamheid</a><br>
                    <a href="/about">Verantwoord</a><br>
                </div></div>
            <div class="col-md-2">
                <div class="links col-md-auto">
                    <h3>Vragen aan OosterplasDOET!:</h3>
                    <a href="/about">Contact</a><br>
                    <a href="/about">FAQ</a><br>
                    <a href="/about">Cookies</a><br>
                </div>
            </div>
            <div class="col-md-2">
                <div class="links col-md-auto">
                    <h3>Officiële stukken:</h3>
                    <a href="/about">Notulen</a><br>
                    <a href="/about">Doelstelling</a><br>
                    <a href="/about">Beleidsplan</a><br>
                    <a href="/about">Activiteitenplan</a><br>
                </div>
            </div>
        </div>
    </div>
@endsection
        <!-- Footer by Gerjan

        <style>
            .koptext{
                font-size: 20px;
            }

            .tablefooter{
                width: 99%;
                margin-left: 30px;
                margin-right: 30px;
                margin-top: 15px;
            }
            .tablefooter tr td {
                color: #fff;
                font-family: "Bebas Neue";
            }
            .tablefooter tr td a {
                color: #fff;
                letter-spacing: 0.5px;
            }
            #indexFooter{
                height: auto;
                background-size: cover;
                background-color: #ef6c33;
            }

        </style>


		<table class="tablefooter">
			<tr>
				<td class="koptext">Over OosterplasDOET!</td>
				<td class="koptext">Vragen OosterplasDOET!</td>
				<td class="koptext">Duurzaam OosterplasDOET!</td>
				<td class="koptext">Officiële stukken</td>
			</tr>
			<tr>
				<td><a href="#">Wie zijn wij</a></td>
				<td><a href="#contact">Contact</a></td>
				<td><a href="#">Verantwoord</a></td>
				<td><a href="#">Doelstelling</a></td>
			</tr>
			<tr>
				<td><a href="{{ url('/about') }}">Even voorstellen</a></td>
				<td><a href="#">FAQ</a></td>
				<td><a href="#">Duurzaamheid</a></td>
				<td><a href="#">Beleidsplan</a></td>
			</tr>
			<tr>
				<td></td>
				<td><a href="#">Cookies</a></td>
				<td></td>
				<td><a href="#">Activiteitenplan</a></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td><a href="#">Financiële verantwoording</a></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td><a href="#">Accountantsverklaring</a></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td><a href="#">Notulen</a></td>
			</tr>
		</table>

        2 story points

        -->