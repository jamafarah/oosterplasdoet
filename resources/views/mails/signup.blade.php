<p>Beste Oosterplas,</p>
<p>Er is een inschrijving binnen gekomen voor het evenement: {{ $event->name }}.</p>
<p>Inschrijvings details:</p>
Naam: {{ $signup->first_name }} {{ $signup->last_name }}<br />
Emailadres: {{ $signup->emailaddress }}<br />
Geboortedatum: {{ $signup->birthdate }}<br />


@if (count($signupAppendices) > 0)
    <p>Aanhangsels:</p>
            @foreach ($signupAppendices as $appendix)
                <p>
                Naam: {{ $appendix->first_name }} {{ $appendix->last_name }}<br />
                Geboortedatum: {{ $appendix->birthdate }}<br />
                </p>
            @endforeach
@endif