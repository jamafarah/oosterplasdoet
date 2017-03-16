@extends('layouts.app')


@section('content')

    <h2>Inschrijving succesvol</h2>
    <p>U bent succesvol ingeschreven voor het evenement  {{ $event->name }}</p>

    <a href="{ route('events') }">Ga terug naar evenementen</a>

    {!! Form::close() !!}
@endsection