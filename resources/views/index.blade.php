@extends('layouts.app')


@section('content')
    <div class="banner row-6 green-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">
        <img src="//www.oosterplasdoet.nl/wp-content/uploads/2016/11/Schermafbeelding-2016-11-02-om-22.13.56-e1478121477474.png" alt="" class="centered-logo">
    </div>
    @if (Session::has('success'))
    <div class="container">
        <div class="row">
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
    @endif
    <div class="container raised">
        <div class="slogan">
            <h1 class="green">We halen samen meer uit onze wijk!</h1>
            <p>
                Stichting OosterplasDOET! is er als wijkonderneming in de wijken ‘s-Hertogenbosch Oost en Hintham om mensen
                en
                organisaties te verbinden. Dit doen we door het coördineren en stimuleren van activiteiten op het gebied van
                onderwijs, arbeid, sport, cultuur en zorg & welzijn. Met als speerpunten huiswerkbegeleiding en
                gunbanen.
            </p>
        </div>
        <div class="services">
            <div class="serviceBlock col-xs-12 col-md-6">
                <div class="image" style="background-image: url(http://wvua23.com/wp-content/uploads/2015/04/school-stock.jpg)">

                </div>
                <div class="blurred contentPane">
                    <h3 class="orange">Huiswerk begeleiding</h3>
                    <p>
                        De begeleiding helpt je om je studie goed te kunnen volgen, je leert hoe je het beste kunt leren en je krijgt hiervoor coaching om zelfstandig aan de slag te kunnen.
                        Je leert plannen en je krijgt begeleiding om je brugklas jaar goed aan te pakken. Dit alles vindt plaats bij de Biechten en er is tussentijds ook ruimte om even lekker
                        te ontspannen of juist even te bewegen om daarna met hernieuwd concentratie weer verder te gaan.
                    </p>
                    <button class="more orange-background">Lees meer</button>
                </div>
            </div>

            <div class="serviceBlock col-xs-12 col-md-6">
                <div class="image" style="background-image: url(http://i.telegraph.co.uk/multimedia/archive/03219/stock-photos-vince_3219813k.jpg)">

                </div>
                <div class="blurred contentPane">
                    <h3 class="green">Gunbanen</h3>
                    <p>
                        “Het project 'gunbanen' is een pilot. Verenigingen rondom de Oosterplas willen zich graag inzetten werkloze Bossche jongeren.
                        Het doel is om hen aan een betaalde baan te krijgen. Jongeren zetten zich vrijwillig in bij één van de dertien verenigingen in Den Bosch Oost.
                        Met behoud van hun uitkering, en zonder de sollicitatieplicht.
                        In ruil voor het geleverde werk en getoonde motivatie gaat Oosterplas doet! na een half jaar binnen het netwerk van vijfduizend leden op zoek naar een betaalde baan.”
                    </p>
                    <button class="more orange-background">Lees meer</button>

            </div>
        </div>
</div>
    </div>
    <div class="banner row-4 orange-background" style="background-image: url(http://www.panoramawinkel.nl/upload/products/1394527120-art-Panoramafoto_Den_Bosch_Oeteldonk_Markt_Oeteldonkse_dinsdag_S_00173-2500.jpg);">
        <h1 class="white">higlights/activiteiten</h1>
    </div>
<div class="container">
    <div class="row highlightRow">
        <div class="col-xs-12 col-md-4 row-6 highlightBlock">
            <div class="row image thumbnail" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/FullSizeRender.jpg)"></div>
            <h3 class="orange title">B-Battle</h3>
            <h3 class="orange date">6/9/2017</h3>
            <p>Het is alweer voorbij. We kijken terug op 2 mooie dagen baggerloop en B-Battle. Mooi weer, enthousiaste kinderen en Battle teams. We weten het nu al zeker. Volgend jaar zijn we er weer! Zie meer hier

                Winnaar B-Battle 2016: Zeilvereniging Oosterplas. Gefeliciteerd!</p>
        </div>
        <div class="col-xs-12 col-md-4 row-6 highlightBlock">
            <div class="row image thumbnail" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/IMG_6991-e1465718742680.jpg)"></div>
            <h3 class="orange title">BAGGERLOOP 2016</h3>
            <h3 class="orange date">20/3/2016</h3>
            <p>Baggerloop is een jaarlijks evenement dat georganiseerd wordt in samenwerking met ‘S-PORT. Basisschool scholieren van diverse scholen lopen op vrijdagochtend een rondje rond de Oosterplas en moeten daarbij allerlei obstakels trotseren.</p>
        </div>
        <div class="col-xs-12 col-md-4 row-6 highlightBlock">
            <div class="row image thumbnail" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/IMG_6892-e1465718042625.jpg)"></div>
            <h3 class="orange title">komend evenement</h3>
            <h3 class="orange date">9/7/17</h3>
            <p>Dit jaar liepen er weer ongeveer 650 leerlingen mee. Het was opnieuw een groot succes.

                    Het weer was mooi en de kinderen enthousiast. Voor meer foto’s kunt u terecht op onze facebook pagina. OosterplasDOET!</p>
            </div>
        </div>
    </div>
    <div class="banner row-4 orange-background" style="background-image: url(http://www.panoramawinkel.nl/upload/products/1394527120-art-Panoramafoto_Den_Bosch_Oeteldonk_Markt_Oeteldonkse_dinsdag_S_00173-2500.jpg);">
        <h1 class="white">socialmedia/contact</h1>
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
                    Vul je naam en email adres in zodat wij je terug kunnen mailen!
                </p>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::open(['route' => 'index', 'class' => 'feedback-form']) !!}
                    <div class="row">
                        <div class="col-lg-4">
                            {!! Form::label('first_name', 'Voornaam') !!}

                        </div>
                        <div class="col-lg-8">
                            {!! Form::label('last_name', 'Achternaam') !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            {!! Form::text('first_name', Request::get('first_name'), ['required'=>'required']) !!}

                        </div>
                        <div class="col-lg-8">
                            {!! Form::text('last_name', Request::get('last_name'), ['required'=>'required']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::label('emailaddress', 'E-mail adres') !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::email('emailaddress', Request::get('emailaddress'), ['required'=>'required']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::label('message', 'Bericht') !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::textarea('message', Request::get('message'), ['required'=>'required',  'rows' => 7, 'cols' => 50]) !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::submit('verzend', ['class' => 'orange-background']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                    Wij zijn je zeer dankbaar!

            </div>
        </div>
    </div>

    <!-- font awesoem -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection