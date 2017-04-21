@extends('layouts.app')


@section('content')
    

    <style>
        table, th, td {
            border-collapse: collapse;
            border-spacing: 2em;
        }

        th, td {
            padding: 5px;
            text-align: left;    
        }

        .blank_row{
            height: 25px !important; /* overwrites any other rules */
        }

    </style>

	<!-- Banner bovenaan het scherm -->
	<div class="banner row-6 vague-green-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">
		 <img src="//www.oosterplasdoet.nl/wp-content/uploads/2016/11/Schermafbeelding-2016-11-02-om-22.13.56-e1478121477474.png" alt="" class="centered-logo">
	</div>

    @if (Session::has('success'))
    <div class="container">
        <div class="row">
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
    @endif
        @if (Session::has('error'))
        <div class="container">
            <div class="row">
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            </div>
        </div>
    @endif
	<!-- Container voor de rest van de inhoud -->
	<div class="container" id="test2">

		<!-- Titel voor de pagina met bijbehorende text -->
		<div class="row">
			<div class="slogan" style="width: calc(100vw - 300px); background-color: white; min-height: 184px; margin-top: -60px; padding-top: 20px; text-align: center;"><h1 class="vague-green"><u>Contact</u></h1><p>Wij zijn constant op zoek naar ideen voor ons bedrijf en strefen ook naar samenhorigheid in onze gemeenschap</p> <p>Heeft u nog tips of leuke ideen?! Contact ons door middel van het formulier of neem persoonlijk contact met ons op!</p></div>
		</div>
		
		<div class="col-xs-12 col-md-6" style="margin-top: 50px;">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::open(['route' => 'postIdea', 'class' => 'feedback-form']) !!}
                    <div class="row">
                        <div class="col-lg-4">
                            {!! Form::label('first_name', 'Voornaam') !!}

                        </div>
                        <div class="col-lg-8">
                            {!! Form::label('last_name', 'Achternaam') !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            {!! Form::text('first_name', Request::get('first_name'), ['required'=>'required']) !!}

                        </div>
                        <div class="col-lg-8">
                            {!! Form::text('last_name', Request::get('last_name'), ['required'=>'required']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::label('emailaddress', 'E-mail adres') !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::email('emailaddress', Request::get('emailaddress'), ['required'=>'required']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::label('message', 'Bericht') !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::textarea('message', Request::get('message'), ['required'=>'required',  'rows' => 7, 'cols' => 50]) !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::submit('verzend', ['class' => 'orange-background']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                    Wij zijn je zeer dankbaar!
        </div>  
               
        <div class="col-xs-12 col-md-3 col-md-offset-1" style="margin-top: 50px;">
            <table style="width:80%;">
              <tr>
                <th>Naam:</th>
                <td>Stichting OosterplasDoet!</td>
              </tr>
              <tr>
                <th>Adres:</th>
                <td>Vincent van Goghlaan 1</td>
              </tr>
              <tr>
                <th></th>
                <td>5246GB Rosmalen</td>
              </tr>

              <tr class="blank_row">
                  <td colspan="3"></td>
              </tr>

              <tr>
                <th>E-Mail:</th>
                <td>oosterplasdoet@gmail.com</td>
              </tr>

              <tr class="blank_row">
                  <td colspan="3"></td>
              </tr>

              <tr>
                <th>Facebook:</th>
                <td>Facebook.com/oosterplasdoet</td>
              </tr>
              <tr>
                <th>Twitter:</th>
                <td>@oosterplasdoet</td>
              </tr>

              <tr class="blank_row">
                  <td colspan="3"></td>
              </tr>

              <tr>
                <th>Bankrekeningnummer:</th>
                <td>NL64 TRIO 0212 1974 44</td>
              </tr>  
              <tr>
                <th>RSIN nummer:</th>
                <td>855080528</td>
              </tr>
              <tr>
                <th>KvK nummer:</th>
                <td>63073579</td>
              </tr>
              <tr>
                <th>SBI-code:</th>
                <td>88993</td>
              </tr>

            

            </table>
        </div>

	</div>

@endsection