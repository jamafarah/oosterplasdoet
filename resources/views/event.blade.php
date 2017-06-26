<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ ('css/app.css') }}">
</head>
<body>
<header>
    <nav class="navigation">
        <img src="//www.oosterplasdoet.nl/wp-content/uploads/2016/11/Schermafbeelding-2016-11-02-om-22.13.56-e1478121477474.png" alt="" class="logo">
        <ul>
            <a href="{{ url('/') }}">home</a>
            <a href="{{ url('/bedrijven') }}">bedrijven</a>
            <a href="{{ url('/activiteiten') }}">activiteiten kalender</a>
            <a href="{{ url('/about') }}">over ons</a>
        </ul>
    </nav>
</header>
<div class="banner row-6 orange-background" style="background-image: url(http://www.panoramawinkel.nl/upload/products/1394527120-art-Panoramafoto_Den_Bosch_Oeteldonk_Markt_Oeteldonkse_dinsdag_S_00173-2500.jpg);">
    <h1 class="white">b-battle  </h1>
    <h1 class="white"><br> 6/9/2017</h1>
</div>
<div class="container raised">
    <div class="slogan col-md-8">
        <h1 class="orange">B-BATTLE</h1>
        <p>
            Het is alweer voorbij. We kijken terug op 2 mooie dagen baggerloop en B-Battle. Mooi weer, enthousiaste kinderen en Battle teams. We weten het nu al zeker. Volgend jaar zijn we er weer! Zie meer hier

            Winnaar B-Battle 2016: Zeilvereniging Oosterplas.

        </p>
        <h2 class="vague-orange">BAGGERLOOP 2016</h2>
        <p>
            Baggerloop is een jaarlijks evenement dat georganiseerd wordt in samenwerking met ‘S-PORT. Basisschool scholieren van diverse scholen lopen op vrijdagochtend een rondje rond de Oosterplas en moeten daarbij allerlei obstakels trotseren.

            Dit jaar liepen er weer ongeveer 650 leerlingen mee. Het was opnieuw een groot succes.

            Het weer was mooi en de kinderen enthousiast. Voor meer foto’s kunt u terecht op onze facebook pagina. OosterplasDOET
        </p>
    </div>
    <div class="col-md-4 side-form">
        <h2 class="orange">inschrijven</h2>
        <hr>
        <form class="event-form" action="#">
            <input placeholder="naam" name="naam" type="text">
            <input placeholder="geboorte datum" name="geboortedatum" type="date">
            <input placeholder="aantal deelnemers" name="aantal" type="number">
            <input placeholder="email" name="email" type="email">
            <input class="orange-background" value="inschrijven" type="submit">
        </form>
    </div>
</div>
</body>
</html>