@extends('layouts.app')


@section('content')

    <link rel="stylesheet" href="{{ ('css/app.css') }}">
    <div class="banner row-3 orange-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">

        <h1 class="white">Beheer Evenementen</h1>
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

    <div class="container">

        <a class="btn btn-lg orange-background white" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/addevent"><b><span class="glyphicon glyphicon-plus"> </span>Nieuw evenement</b></a>
        <a class="btn btn-lg orange-background white pull-right" type="submit" style="margin-top: 10px; border-radius: 0;" href="../beheerder"><b>Terug</b></a>
        @if (count($event) > 0)
            <table>
                <th>Naam</th>
                <th>Start op</th>
                <th>Eindigd op</th>
                <th > <span class="glyphicon glyphicon-user"></span>Inschrijvingen</th>
                <th > <span class="glyphicon glyphicon-pencil"></span>Aanpassen</th>
                <th > <span class="glyphicon glyphicon-remove-sign"></span>Verwijderen</th>
                @foreach ($event AS $event)
                    <tr>
                        <td> {!! $event->name !!}&nbsp&nbsp&nbsp </td>
                        <td> {!! $event->startDate !!}&nbsp&nbsp&nbsp</td>
                        <td> {!! $event->endDate !!}&nbsp&nbsp&nbsp</td>
                        <td><center> <a class="glyphicon glyphicon-user"  href="{{ route('signupsevent', $event->id) }}"> Inschrijvingen</a></center> </td>
                        <td><center> <a class="glyphicon glyphicon-pencil"  href="{{ route('changeevent', $event->id) }}"> Aanpassen</a></center> </td>
                        <td> <center><a class="glyphicon glyphicon-remove-sign"  href="{{ route('deleteevent', $event->id) }}"> Verwijderen</a></center> </td>
                    </tr>
                @endforeach
            </table>
        @else
            <p>Geen evenementen gevonden</p>
        @endif

    </div>


    <!-- font awesoem -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection