@extends('layouts.app')


@section('content')
<div class="banner row-6 orange-background" style="background-image: url(http://www.panoramawinkel.nl/upload/products/1394527120-art-Panoramafoto_Den_Bosch_Oeteldonk_Markt_Oeteldonkse_dinsdag_S_00173-2500.jpg);">
    <h1 class="white">{{ strtolower($news->title) }}  </h1>
    <h1 class="white"><br> {{ Carbon::createFromFormat('Y-m-d H:i:s', $news->created_at)->format('d/m/Y') }}</h1>
</div>
<div class="container raised">
    <div class="slogan col-md-8">
        <h1 class="orange">{{ strtoupper($news->title) }}</h1>
        <p>
            {!! $news->content !!}
        </p>
    </div>
    <div class="col-md-4 side-form">
        <h2 class="orange">Informatie</h2>
        <hr>
        Geplaatst op: {{ Carbon::createFromFormat('Y-m-d H:i:s', $news->created_at)->format('H:i d-m-Y') }}<br /><br />
    </div>
</div>
@endsection