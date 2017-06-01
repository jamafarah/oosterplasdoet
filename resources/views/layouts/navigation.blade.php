<header>
    <nav class="navbar navbar-default navigation">
        <img src="//www.oosterplasdoet.nl/wp-content/uploads/2016/11/Schermafbeelding-2016-11-02-om-22.13.56-e1478121477474.png" alt="" class="logo">
        <ul class="nav navbar-nav">
            <li><a href="{{ url('/') }}">home</a></li>
            <li><a href="{{ url('/nieuws') }}">nieuws</a></li>
            <li><a href="{{ url('/partners') }}">partners</a></li>

            <li class="dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">services <span class="caret"></span></a>

                <ul class="dropdown-menu">
                    <li><a href="{{ url('/gunbanen') }}">gunbanen</a></li>
                    <li><a href="{{ url('/studiebegeleiding') }}">studiebegeleiding</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/events') }}">activiteiten</a></li>
            <li><a href="{{ url('/bewoners') }}">buurtbewoners</a></li>
            <li><a href="{{ url('/about') }}">over ons</a></li>
        </ul>
    </nav>
</header>