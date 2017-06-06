<header>
    <nav class="navbar navbar-default navigation">
        <a href="{{ url('/') }}"><img src="/img/OosterplasDOET-LOGO.png" alt="" class="logo"></a>
        <ul class="nav navbar-nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/nieuws') }}">Nieuws</a></li>
            <li><a href="{{ url('/partners') }}">Partners</a></li>

            <li class="dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>

                <ul class="dropdown-menu">
                    <li><a href="{{ url('/gunbanen') }}">Gunbanen</a></li>
                    <li><a href="{{ url('/studiebegeleiding') }}">Studiebegeleiding</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/events') }}">Activiteiten</a></li>
            <li><a href="{{ url('/about') }}">Over ons</a></li>
        </ul>
    </nav>
</header>