@extends('layouts.app')


@section('content')

    <link rel="stylesheet" href="{{ ('css/app.css') }}">
    <div class="banner row-2 orange-background">

        <h1 class="white">Beheer Nieuwsberichten</h1>
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

    <div class="container">



        <a class="btn btn-lg orange-background white pull-right" type="submit" style="margin-top: 10px; border-radius: 0;" href="../editmedewerker"><b>Terug</b></a>
        <h1 class="white">Inschrijven</h1>



        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        {!! Form::open(array('route' => 'createmedewerker', 'class' => 'form', 'enctype'=>"multipart/form-data")) !!}


        {!! Form::hidden('id', '', ['readonly']) !!}


        <div class="form-group">
            {!! Form::label('naam', 'naam') !!}
            {!! Form::text('naam', '', ['required'=>'required', 'class'=>'form-control' ]) !!}
        </div>


        <div class="form-group">
            {!! Form::label('rol', 'rol') !!}
            {!! Form::text('rol', '', ['required'=>'required', 'class'=>'form-control']) !!}
        </div>




        <div class="form-group">
            {!! Form::label('img', 'img') !!}
            {!! Form::file('img', '',array('class' => 'image')) !!}
        </div>




        <div class="form-group">
            {!! Form::label('beschrijving', 'beschrijving') !!}
            {!! Form::textarea('beschrijving', '') !!}
        </div>




        <br/> <br/> <br/>

        {!! Form::submit('Aanmaken', ['class' => 'btn btn-lg vague-orange-background', 'style' => 'border-radius: 0; color: #fff']) !!}

        {!! Form::close() !!}


    </div>
    @include(('../editor'))

    <!-- font awesoem -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection