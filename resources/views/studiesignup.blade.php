@extends('layouts.app')


@section('content')
    <script>
        $(document).on('click', '.browse', function(){
            var file = $(this).parent().parent().parent().find('.file');
            file.trigger('click');
        });
        $(document).on('change', '.file', function(){
            $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
        });
    </script>
    <link rel="stylesheet" href="{{ ('css/app.css') }}">
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>


    <div class="banner row-6 orange-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">

        <h1 class="white">Studiebegeleiding</h1>
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
    <div class="container orange-background">
        <a class="btn btn-lg orange-background white pull-right" type="submit" style="margin-top: 10px; border-radius: 0;" href="../studiebegeleiding"><b>Terug</b></a>
        <h1 class="white">Inschrijven</h1>



        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        {!! Form::open(array('route' => 'studiebegeleiding_signup', 'class' => 'form')) !!}
        <div class="form-group">
            {!! Form::text('Naam', null,
                array('required',
                      'class'=>'signup-form-input input-lg',
                      'placeholder'=>'Naam')) !!}
        </div>

        <div class="form-group">
            {!! Form::text('Email', null,
                array('required',
                      'class'=>'signup-form-input input-lg',
                      'placeholder'=>'Email')) !!}
        </div>

        <div class="form-group">
            {!! Form::text('TelefoonNummer', null,
                array('required',
                      'class'=>'signup-form-input input-lg',
                      'placeholder'=>'Telefoon nummer')) !!}
        </div>

        <div class="form-group">
            {!! Form::date('Geboortedatum', null,
                array('required',
                      'class'=>'signup-form-input input-lg',
                      'placeholder'=>'Geboortedatum')) !!}
        </div>

        <div class="form-group">
            {!! Form::text('Adres', null,
                array('required',
                      'class'=>'signup-form-input input-lg',
                      'placeholder'=>'Adres')) !!}
        </div>

        <div class="form-group">
            {!! Form::text('Studie', null,
                array('',
                      'class'=>'signup-form-input input-lg',
                      'placeholder'=>'Laatst afgeronde studie')) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Verzend inschrijving',
              array('class'=>'btn btn-lg orange signup-send')) !!}
        </div>

        {!! Form::close() !!}

    </div>
    <!-- font awesoem -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection