<p>Beste Oosterplas,</p>
<p>Er is een inschrijving binnen gekomen voor het evenement: {{ $event->name }}.</p>
<p>Inschrijvingsdetails:</p>
Naam: {{ $signup->getFullName() }}<br />
Emailadres: {{ $signup->emailaddress }}<br />
Geboortedatum: {{ $signup->birthdate }}<br />


@if (count($signup->appendices) > 0)
    <p>Aanhangsels:</p>
            @foreach ($signup->appendices as $appendix)
                <p>
                Naam: {{ $appendix->first_name }} {{ $appendix->last_name }}<br />
                Geboortedatum: {{ $appendix->birthdate }}<br />
                </p>
            @endforeach
@endif