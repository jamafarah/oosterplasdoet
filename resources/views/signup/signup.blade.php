@extends('layouts.app')


@section('content')

<div class="banner row-6 orange-background" style="background-image: url(http://www.panoramawinkel.nl/upload/products/1394527120-art-Panoramafoto_Den_Bosch_Oeteldonk_Markt_Oeteldonkse_dinsdag_S_00173-2500.jpg);">
    <h1 class="white">{{ strtolower($event->name) }}  </h1>
    <h1 class="white"><br> {{ Carbon::createFromFormat('Y-m-d H:i:s', $event->startDate)->format('d/m/Y') }}</h1>
</div>
<div class="container raised">
    <div class="col-md-10">
        <h1 class="orange">Inschrijven</h1>
        <p>
            Middels dit formulier kunt u zichzelf en ook andere inschrijven voor het evenement: {{ $event->name }}<br />
            Het evenement start op {{ Carbon::createFromFormat('Y-m-d H:i:s', $event->startDate)->format('d-m-Y') }} om {{ Carbon::createFromFormat('Y-m-d H:i:s', $event->startDate)->format('H:i') }}.
        </p>
        <div style="text-align: left">
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


            <div class="form-group">
            {!! Form::label('emailaddress', 'E-mail adres') !!}
            {!! Form::text('emailaddress', '', ['required'=>'required', 'class'=>'form-control']) !!}
            </div>


  <div class="form-group">
            {!! Form::label('first_name', 'Voornaam') !!}
            {!! Form::text('first_name', '', ['required'=>'required', 'class'=>'form-control']) !!}
            </div>

            {!! Form::label('last_name', 'Achternaam') !!}
            {!! Form::text('last_name', '', ['required'=>'required', 'class'=>'form-control']) !!}
            <br />

            {!! Form::label('birthdate', 'Geboortedatum') !!}
            {!! Form::date('birthdate', '', ['required'=>'required', 'class'=>'form-control datepicker']) !!}
            <br />


            <div class="appendices">
                <h3>Aanhangsels</h3>
                <p>Geef hier aan welke aanhangels u wil inschrijven</p>
                        <span class="btn vague-orange-background add" style="border-radius: 0; color: #fff">Voeg aanhangsel toe</span><br/><br/>
                        @if(count(Request::get('appendices')) == 0)
                            @include('signup.appendix', ['id' => 0])
                        @else
                            @foreach(Request::get('appendices') AS $id => $appendix)
                                @include('signup.appendix', ['id' => $id])
                            @endforeach
                        @endif
            </div>

<br/> <br/> <br/>

            {!! Form::submit('Inschrijven', ['class' => 'btn btn-lg vague-orange-background', 'style' => 'border-radius: 0; color: #fff']) !!}

            {!! Form::close() !!}
        </div>


    </div>
</div>
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
            "<input required=\"required\" class=\"form-control\" name=\"appendices[" + newId + "][first_name]\" type=\"text\" id=\"appendices[0][first_name]\">" +
            "<br />" +

            "<label for=\"appendices[" + newId + "][last_name]\">Achternaam</label>" +
            "<input required=\"required\" class=\"form-control\" name=\"appendices[" + newId + "][last_name]\" type=\"text\" id=\"appendices[0][last_name]\">"+
            "<br />"+

            "<label for=\"appendices[" + newId + "][birthdate]\">Geboortedatum</label>"+
            "<input required=\"required\" id=\"birthdate-" + newId + "\" class=\"form-control datepicker\" name=\"appendices[" + newId + "][birthdate]\" type=\"date\" id=\"appendices[0][birthdate]\">"+
            "<br />"+
            "<span class=\"btn vague-orange-background remove\" style=\"border-radius: 0; color: #fff\">Verwijder bovenstaand aanhangsel</span>"+
        "</div>";

        $(".appendices").append(element);



        $("#birthdate-" + newId).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '1930:{{ date('Y') }}',
            dateFormat: 'yy-mm-dd'
        })
    });

    $(".appendices").on("click", ".remove", function (){
        $(this).parent().remove();
    });

    $("html").on('click', '.datepicker', function(e) {
        e.preventDefault();
    });

    $(".datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '1930:{{ date('Y') }}',
        dateFormat: 'yy-mm-dd'
    })


});
</script>
@endsection