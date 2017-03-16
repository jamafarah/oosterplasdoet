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
            <a href="{{ url('/bewoners') }}">buurtbewoners</a>
            <a href="{{ url('/about') }}">over ons</a>
        </ul>
    </nav>
</header>
<div class="banner row-6 vague-green-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">
    <img src="//www.oosterplasdoet.nl/wp-content/uploads/2016/11/Schermafbeelding-2016-11-02-om-22.13.56-e1478121477474.png" alt="" class="centered-logo">
</div>
<div class="container raised">
    <div class="slogan">
        <h1 class="vague-green">Actieve evenementen</h1>
    </div>
    <div class="services row-5">
        <div class="serviceBlock col-md-12 green-background" style="background-image: url(http://wvua23.com/wp-content/uploads/2015/04/school-stock.jpg)">
            <div class="blurred contentPane">
                <h3 class="orange">B-battle</h3>
                <p>
                    De begeleiding helpt je om je studie goed te kunnen volgen, je leert hoe je het beste kunt leren en je krijgt hiervoor coaching om zelfstandig aan de slag te kunnen.
                    Je leert plannen en je krijgt begeleiding om je brugklas jaar goed aan te pakken. Dit alles vindt plaats bij de Biechten en er is tussentijds ook ruimte om even lekker
                    te ontspannen of juist even te bewegen om daarna met hernieuwd concentratie weer verder te gaan.
                </p>
                <button class="more vague-orange-background">Lees meer</button>
            </div>
        </div>
    </div>
</div>
<div class="banner row-2 orange-background" style="background-image: url(http://www.panoramawinkel.nl/upload/products/1394527120-art-Panoramafoto_Den_Bosch_Oeteldonk_Markt_Oeteldonkse_dinsdag_S_00173-2500.jpg);">
    <h1 class="white">afgesloten evenemten</h1>
</div>
<div class="container">
    <div class="row highlightRow">
        <div class="serviceBlock col-md-4 orange-background" style="background-image: url(http://wvua23.com/wp-content/uploads/2015/04/school-stock.jpg)">
            <div class="blurred contentPane">
                <h3 class="vague-green">B-battle</h3>
                <p>
                    De begeleiding helpt je om je studie goed te kunnen volgen, je leert hoe je het beste kunt leren en je krijgt hiervoor coaching om zelfstandig aan de slag te kunnen.
                    Je leert plannen en je krijgt begeleiding om je brugklas jaar goed aan te pakken. Dit alles vindt plaats bij de Biechten en er is tussentijds ook ruimte om even lekker
                    te ontspannen of juist even te bewegen om daarna met hernieuwd concentratie weer verder te gaan.
                </p>
                <button class="more vague-orange-background">Lees meer</button>
            </div>
        </div>
        <div class="serviceBlock col-md-4 orange-background" style="background-image: url(http://wvua23.com/wp-content/uploads/2015/04/school-stock.jpg)">
            <div class="blurred contentPane">
                <h3 class="vague-green">B-battle</h3>
                <p>
                    De begeleiding helpt je om je studie goed te kunnen volgen, je leert hoe je het beste kunt leren en je krijgt hiervoor coaching om zelfstandig aan de slag te kunnen.
                    Je leert plannen en je krijgt begeleiding om je brugklas jaar goed aan te pakken. Dit alles vindt plaats bij de Biechten en er is tussentijds ook ruimte om even lekker
                    te ontspannen of juist even te bewegen om daarna met hernieuwd concentratie weer verder te gaan.
                </p>
                <button class="more vague-orange-background">Lees meer</button>
            </div>
        </div>
        <div class="serviceBlock col-md-4 orange-background" style="background-image: url(http://wvua23.com/wp-content/uploads/2015/04/school-stock.jpg)">
            <div class="blurred contentPane">
                <h3 class="vague-green">B-battle</h3>
                <p>
                    De begeleiding helpt je om je studie goed te kunnen volgen, je leert hoe je het beste kunt leren en je krijgt hiervoor coaching om zelfstandig aan de slag te kunnen.
                    Je leert plannen en je krijgt begeleiding om je brugklas jaar goed aan te pakken. Dit alles vindt plaats bij de Biechten en er is tussentijds ook ruimte om even lekker
                    te ontspannen of juist even te bewegen om daarna met hernieuwd concentratie weer verder te gaan.
                </p>
                <button class="more vague-orange-background">Lees meer</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>