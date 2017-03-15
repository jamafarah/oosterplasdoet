@extends('layouts.app')


@section('content')

    <h2>Inschrijven {{ $event->name }}</h2>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['route' => ['signup', $event->id]]) !!}

    {!! Form::label('emailaddress', 'E-mail adres') !!}
    {!! Form::text('emailaddress', '', ['required'=>'required']) !!}
    <br />

    {!! Form::label('first_name', 'Voornaam') !!}
    {!! Form::text('first_name', '', ['required'=>'required']) !!}
    <br />

    {!! Form::label('last_name', 'Achternaam') !!}
    {!! Form::text('last_name', '', ['required'=>'required']) !!}
    <br />

    {!! Form::label('birthdate', 'Geboortedatum') !!}
    {!! Form::date('birthdate', '', ['required'=>'required']) !!}
    <br />


    <div class="appendices">
        <h3>Aanhangsels</h3>
        <p>Geef hier aan welke aanhangels u wil inschrijven</p>
        <div class="appendix" data-id="0">
            {!! Form::label('appendices[0][first_name]', 'Voornaam') !!}
            {!! Form::text('appendices[0][first_name]', '', ['required'=>'required']) !!}
            <br />

            {!! Form::label('appendices[0][last_name]', 'Achternaam') !!}
            {!! Form::text('appendices[0][last_name]', '', ['required'=>'required']) !!}
            <br />

            {!! Form::label('appendices[0][birthdate]', 'Geboortedatum') !!}
            {!! Form::date('appendices[0][birthdate]', '', ['required'=>'required']) !!}
            <br />
            <span class="remove">Verwijder</span>
        </div>
    </div>

    <span class="add">Voeg toe</span>


    {!! Form::submit('Inschrijven') !!}

    {!! Form::close() !!}
@endsection




@section('script')
<script>
$(document).ready(function() {

    $(".add").click(function() {
        newId = $(".appendices .appendix:last-child").data('id')+1;

        if (isNaN(newId)) {
            newId = 0;
        }

        element =
        "<div class=\"appendix\" data-id=\"" + newId + "\">" +
            "<label for=\"appendices[" + newId + "][first_name]\">Voornaam</label>" +
            "<input required=\"required\" name=\"appendices[" + newId + "][first_name]\" type=\"text\" id=\"appendices[0][first_name]\">" +
            "<br />" +

            "<label for=\"appendices[" + newId + "][last_name]\">Achternaam</label>" +
            "<input required=\"required\" name=\"appendices[" + newId + "][last_name]\" type=\"text\" id=\"appendices[0][last_name]\">"+
            "<br />"+

            "<label for=\"appendices[" + newId + "][birthdate]\">Geboortedatum</label>"+
            "<input required=\"required\" name=\"appendices[" + newId + "][birthdate]\" type=\"date\" id=\"appendices[0][birthdate]\">"+
            "<br />"+
            "<span class=\"remove\">remove</span>"+
        "</div>";

        $(".appendices").append(element);
    });

    $(".appendices").on("click", ".remove", function (){
        $(this).parent().remove();
    });
});
</script>
@endsection