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

            <table>
                <th>Naam</th>
                <th>Inhoud</th>
                <th>Start op</th>
                <th>Eindigd op</th>

                    <tr>
                        <td> {!! $event->name !!} </td>
                        <td> {!! $event->content !!} </td>
                        <td> {!! $event->startDate !!} </td>
                        <td> {!! $event->endDate !!} </td>
                    </tr>
            </table>

    <H2>Inschrijvingen</H2>
        <table>
            <tr>
                <th>first_name</th>
                <th>last_name</th>
                <th>birthdate</th>
                <th>emailaddress</th>
                <th>Aanhang van</th>
            </tr>
            @foreach ($event->signups()->get() AS $signup)
            <tr>
                <td>{!! $signup->first_name !!} </td>
                <td>{!! $signup->last_name !!} </td>
                <td>{!! $signup->birthdate !!} </td>
                <td>{!! $signup->emailaddress !!} </td>
                @foreach ($signup->appendices()->get() AS $signup)
                    <tr>
                        <td>{!! $signup->first_name !!} </td>
                        <td>{!! $signup->last_name !!} </td>
                        <td>{!! $signup->birthdate !!} </td>
                        <td>{!! $signup->emailaddress !!} </td>
                        <td>{!! $signup->first_name !!} </td>
                    </tr>
                    @endforeach
            </tr>
                @endforeach
        </table>

    </div>


    <!-- font awesoem -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection