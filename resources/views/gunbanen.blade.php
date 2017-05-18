@extends('layouts.app')


@section('content')

    <link rel="stylesheet" href="{{ ('css/app.css') }}">
    <div class="banner row-6 orange-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">

        <h1 class="white">Gunbanen</h1>
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
    @if (Session::has('error'))
        <div class="container">
            <div class="row">
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            </div>
        </div>
    @endif
    {{--<form action="gunbanen/signup/">--}}
    {{--<button class="btn btn-lg orange-background white pull-right" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)">Aanmelden</button>--}}
    {{--</form>--}}

    <a class="btn btn-lg orange-background white pull-right" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="gunbanen/signup"><b>Aanmelden</b></a>
    <div class="container">
            <h1 class="orange">Gunbanen</h1>
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

                </p>

    </div>


    <!-- font awesoem -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection