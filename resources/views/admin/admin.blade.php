@extends('layouts.app')


@section('content')

    <link rel="stylesheet" href="{{ ('css/app.css') }}">
    <div class="banner row-3 orange-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">

        <h1 class="white">Beheer Omgeving</h1>
    </div>
        <div class="container">
            <a class="btn btn-lg orange-background white pull-right" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/logout"><b>Uitloggen</b></a>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <iv class="panel panel-default">
                        <div class="panel-body">
                            <h1 class="orange">Welkom op de beheer pagina</h1>


                        </div>
                    <div>
                        <a class="btn btn-lg orange-background white" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/editnews"><b>Nieuwsberichten</b></a>
                        <a class="btn btn-lg orange-background white" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/editevent"><b>Evenementen</b></a>
                        <a class="btn btn-lg orange-background white" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/editsponsor"><b>Partners/Sponsoren</b></a>
                        <a class="btn btn-lg orange-background white" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/editpages"><b>Pagina text aanpassen</b></a>
                        <a class="btn btn-lg orange-background white" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/editmedewerker"><b>Medewerkers</b></a>
                    </div>
                    </div>
                </div>
            </div>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection