@extends('layouts.app')


@section('content')

    <link rel="stylesheet" href="{{ ('css/app.css') }}">
    <div class="banner row-3 orange-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">

        <h1 class="white">Pagina beheer Omgeving</h1>
    </div>
    <div class="container">
        <a class="btn btn-lg orange-background white pull-right" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/beheerder"><b>Terug</b></a>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <iv class="panel panel-default">
                    <div class="panel-body">
                        <h1 class="orange">Welkom op de beheer pagina voor het text aanpassen</h1>


                    </div>
                    <div>
                        <a class="btn btn-lg orange-background white" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/editpage/homepagina"><b>Home pagina - koptekst</b></a>
                        <a class="btn btn-lg orange-background white" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/editpage/homestudiebegeleiding"><b>Home pagina - studiebegeleiding</b></a>
                        <a class="btn btn-lg orange-background white" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/editpage/homegunbanen"><b>Home pagina - gunbanen</b></a>
                        <br/>
                        <a class="btn btn-lg orange-background white" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/editpage/gunbanen"><b>Gunbanen pagina</b></a>
                        <a class="btn btn-lg orange-background white" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/editpage/partners"><b>Partner pagina</b></a>
                        <a class="btn btn-lg orange-background white" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/editpage/overons"><b>Over Ons pagina</b></a>
                        <a class="btn btn-lg orange-background white" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/editpage/studiebegeleiding"><b>Studie Begeleiding</b></a>
                    </div>
            </div>
        </div>
    </div>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection