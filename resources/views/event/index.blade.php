@extends('layouts.app')


@section('content')
    @if (count($events) > 0)
        @foreach ($events AS $event)
            <h1>{{ $event->name }}</h1>
            <p>{{ $event->content }}</p>
            <a href="{{ route('eventShow', $event->id) }}">Meer informatie</a>
        @endforeach
    @else
        <p>Geen events gevonden</p>
    @endif
@endsection