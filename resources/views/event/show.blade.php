@extends('layouts.app')


@section('content')
    <h1>{{ $event->name }}</h1>
    <p>{{ $event->content }}</p>
    <p>Het evenement start op {{ Carbon::createFromFormat('Y-m-d H:i:s', $event->startDate)->format('d-m-Y') }} om {{ Carbon::createFromFormat('Y-m-d H:i:s', $event->startDate)->format('H:i:s') }}</p>
    <a href="{{ route('signup', $event->id) }}">Inschrijven</a>
@endsection