<p>Beste {{ $signup->getFullName() }},</p>
<p>U heeft zich zojuist ingeschreven voor het evenement: {{ $event->name }}</p>
<p></p>
@if (count($signup->appendices) > 0)
    <p>Aanhangsels:</p>
            @foreach ($signup->appendices as $appendix)
                <p>
                Naam: {{ $appendix->first_name }} {{ $appendix->last_name }}<br />
                Geboortedatum: {{ $appendix->birthdate }}<br />
                </p>
            @endforeach
@endif
<p>
    Met vriendelijke groet,<br />
    OosterplasDOET
</p>