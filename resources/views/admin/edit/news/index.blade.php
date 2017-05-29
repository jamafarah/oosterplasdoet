@extends('layouts.app')


@section('content')

    <link rel="stylesheet" href="{{ ('css/app.css') }}">
    <div class="banner row-2 orange-background">

        <h1 class="white">Beheer Nieuwsberichten</h1>
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

        <a class="btn btn-lg orange-background white" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/addnews"><b><span class="glyphicon glyphicon-plus"> </span>Nieuw nieuwsbericht</b></a>
        @if (count($news) > 0)
            <table>
                <th>Titel</th>
                <th>Intro</th>
                <th>Aangemaakt op</th>
                <th>Bijgewerkt op</th>
                <th > <span class="glyphicon glyphicon-pencil"></span>Aanpassen</th>
                <th > <span class="glyphicon glyphicon-remove-sign"></span>Verwijderen</th>
            @foreach ($news AS $news)
                <tr>
                    <td> {!! $news->title !!} </td>
                    <td> {!! $news->intro !!} </td>
                    <td> {!! $news->created_at !!} </td>
                    <td> {!! $news->updated_at !!} </td>
                    <td><center> <a class="glyphicon glyphicon-pencil"  href="{{ route('changenews', $news->id) }}"> Aanpassen</a></center> </td>
                    <td> <center><a class="glyphicon glyphicon-remove-sign"  href="{{ route('deletenews', $news->id) }}"> Verwijderen</a></center> </td>
                </tr>
            @endforeach
            </table>
        @else
            <p>Geen nieuws gevonden</p>
        @endif

    </div>


    <!-- font awesoem -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection