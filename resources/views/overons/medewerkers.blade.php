<div class="services">
    <div class="col-md-12 lib-item serviceBlock">
        <div class="lib-panel">
            <div class="row blurred contentPane">
                <div class="col-md-4 no-padding">
                    <img class="lib-img-show" src="{{ asset('/img/medewerker/' . $medewerkers->img) }}">
                </div>
                <div class="col-md-8">
                    <div class="lib-row lib-header">
                        <h3 class="orange">{{ $medewerkers->naam }}</h3>
                        <div class="lib-header-seperator"></div>
                    </div>
                    <div class="lib-row lib-desc">
                        <p>
                            Functie: {!! $medewerkers->rol !!}
                        </p>
                        <p>
                            Beschrijving: {!! $medewerkers->beschrijving !!}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>