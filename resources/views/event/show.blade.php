@extends('layouts.app')


@section('content')
<div class="banner row-6 orange-background" style="background-image: url(http://www.panoramawinkel.nl/upload/products/1394527120-art-Panoramafoto_Den_Bosch_Oeteldonk_Markt_Oeteldonkse_dinsdag_S_00173-2500.jpg);">
    <h1 class="white">{{ strtolower($event->name) }}  </h1>
    <h1 class="white"><br> {{ Carbon::createFromFormat('Y-m-d H:i:s', $event->startDate)->format('d/m/Y') }}</h1>
</div>
<div class="container raised">
    <div class="slogan col-md-8">
        <h1 class="orange">{{ strtoupper($event->name) }}</h1>
        <p>
            {{ $event->content }}
        </p>
    </div>
    <div class="col-md-4 side-form">
        <h2 class="orange">Informatie</h2>
        <hr>
        Startdatum: {{ Carbon::createFromFormat('Y-m-d H:i:s', $event->startDate)->format('d-m-Y') }}<br />
        Starttijd: {{ Carbon::createFromFormat('Y-m-d H:i:s', $event->startDate)->format('H:i') }}<br /><br />

        <a class="btn  btn-lg vague-orange-background" style="border-radius: 0; color: #fff" href="{{ route('signup', $event->id) }}">Inschrijven</a></button>
    </div>
</div>
@endsection