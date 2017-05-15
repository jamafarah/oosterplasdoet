@extends('layouts.app')


@section('content')
<div class="banner row-6 vague-green-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">
    <img src="//www.oosterplasdoet.nl/wp-content/uploads/2016/11/Schermafbeelding-2016-11-02-om-22.13.56-e1478121477474.png" alt="" class="centered-logo">
</div>
<div class="container raised">
    <div class="slogan">
        <h1 class="vague-green">Actieve activiteiten</h1>
    </div>

    @if (count($events) > 0)
        @foreach ($events AS $event)
            @include('event.partials.eventBlock', ['event', $event])
        @endforeach
    @else
        <p>Geen activiteiten gevonden</p>
    @endif

    </div>
    <div class="banner row-2 orange-background" style="background-image: url(http://www.panoramawinkel.nl/upload/products/1394527120-art-Panoramafoto_Den_Bosch_Oeteldonk_Markt_Oeteldonkse_dinsdag_S_00173-2500.jpg);">
        <h1 class="white">Afgesloten activiteiten</h1>
    </div>
    <div class="container">
        <div class="row highlightRow">
            <div class="serviceBlock col-md-4">
                <div class="image" style="background-image: url(http://wvua23.com/wp-content/uploads/2015/04/school-stock.jpg)">

                </div>
                <div class="blurred contentPane">
                    <h3 class="vague-green">B-battle</h3>
                    <p>
                        De begeleiding helpt je om je studie goed te kunnen volgen, je leert hoe je het beste kunt leren en je krijgt hiervoor coaching om zelfstandig aan de slag te kunnen.
                        Je leert plannen en je krijgt begeleiding om je brugklas jaar goed aan te pakken. Dit alles vindt plaats bij de Biechten en er is tussentijds ook ruimte om even lekker
                        te ontspannen of juist even te bewegen om daarna met hernieuwd concentratie weer verder te gaan.
                    </p>
                    <a href="" class="button more vague-orange-background">Lees meer</a>
                </div>
            </div>
            <div class="serviceBlock col-md-4">
                <div class="image" style="background-image: url(http://wvua23.com/wp-content/uploads/2015/04/school-stock.jpg)">

                </div>
                <div class="blurred contentPane">
                    <h3 class="vague-green">B-battle</h3>
                    <p>
                        De begeleiding helpt je om je studie goed te kunnen volgen, je leert hoe je het beste kunt leren en je krijgt hiervoor coaching om zelfstandig aan de slag te kunnen.
                        Je leert plannen en je krijgt begeleiding om je brugklas jaar goed aan te pakken. Dit alles vindt plaats bij de Biechten en er is tussentijds ook ruimte om even lekker
                        te ontspannen of juist even te bewegen om daarna met hernieuwd concentratie weer verder te gaan.
                    </p>
                    <a href="" class="button more vague-orange-background">Lees meer</a>
                </div>
            </div>
            <div class="serviceBlock col-md-4">
                <div class="image" style="background-image: url(http://wvua23.com/wp-content/uploads/2015/04/school-stock.jpg)">

                </div>
                <div class="blurred contentPane">
                    <h3 class="vague-green">B-battle</h3>
                    <p>
                        De begeleiding helpt je om je studie goed te kunnen volgen, je leert hoe je het beste kunt leren en je krijgt hiervoor coaching om zelfstandig aan de slag te kunnen.
                        Je leert plannen en je krijgt begeleiding om je brugklas jaar goed aan te pakken. Dit alles vindt plaats bij de Biechten en er is tussentijds ook ruimte om even lekker
                        te ontspannen of juist even te bewegen om daarna met hernieuwd concentratie weer verder te gaan.
                    </p>
                    <a href="" class="button more vague-orange-background">Lees meer</a>
                </div>
            </div>

        </div>
    </div>
@endsection