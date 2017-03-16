@extends('layouts.app')


@section('content')

<div class="banner row-6 orange-background" style="background-image: url(http://www.panoramawinkel.nl/upload/products/1394527120-art-Panoramafoto_Den_Bosch_Oeteldonk_Markt_Oeteldonkse_dinsdag_S_00173-2500.jpg);">
    <h1 class="white">{{ strtolower($event->name) }}  </h1>
    <h1 class="white"><br> {{ Carbon::createFromFormat('Y-m-d H:i:s', $event->startDate)->format('d/m/Y') }}</h1>
</div>
<div class="container raised">
    <div class="col-md-10">
        <h1 class="orange">Inschrijving succesvol</h1>
        <p>U bent succesvol ingeschreven voor het evenement  {{ $event->name }}</p>

        <a href="{{ route('events') }}">Ga terug naar evenementen</a>
    </div>
</div>
@endsection