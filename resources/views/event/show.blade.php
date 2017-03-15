@extends('layouts.app')


@section('content')
    <h1>{{ $event->name }}</h1>
    <p>{{ $event->content }}</p>
    <a href="{{ route('signup', $event->id) }}">Inschrijven</a>
@endsection