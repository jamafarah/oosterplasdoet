@extends('layouts.app')


@section('content')
<div class="banner row-6 vague-green-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">
    <img src="//www.oosterplasdoet.nl/wp-content/uploads/2016/11/Schermafbeelding-2016-11-02-om-22.13.56-e1478121477474.png" alt="" class="centered-logo">
</div>
<div class="container raised">
    <div class="slogan">
        <h1 class="vague-green">Nieuws</h1>
    </div>

    @if (count($news) > 0)
        @foreach ($news AS $news)
            @include('news.partials.newsBlock', ['news', $news])
        @endforeach
    @else
        <p>Geen nieuws gevonden</p>
    @endif
</div>
@endsection