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



        <div class="container" >
            <a class="btn btn-lg orange-background white pull-right" type="submit" style="margin-top: 10px; border-radius: 0;" href="../editnews"><b>Terug</b></a>
            <h1 class="white">Inschrijven</h1>



            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            {!! Form::open(array('route' => 'updatenews', 'class' => 'form')) !!}


                {!! Form::hidden('id', $news->id, ['readonly']) !!}


            <div class="form-group">
                {!! Form::label('titel', 'Titel') !!}
                {!! Form::text('title', $news->title, ['required'=>'required', 'class'=>'form-control' ]) !!}
            </div>


            <div class="form-group">
                {!! Form::label('slug', 'slug') !!}
                {!! Form::text('slug', $news->slug, ['required'=>'required', 'class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('img', 'img') !!}
                {!! Form::text('img', $news->img, ['required'=>'required', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('intro', 'intro') !!}
                {!! Form::text('intro', $news->intro, ['required'=>'required', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('content', 'content') !!}
                {!! Form::textarea('content', $news->content, ['required'=>'required', 'class'=>'form-control']) !!}
            </div>




            <br/> <br/> <br/>

            {!! Form::submit('Aanpassen', ['class' => 'btn btn-lg vague-orange-background', 'style' => 'border-radius: 0; color: #fff']) !!}

            {!! Form::close() !!}

        </div>

    </div>


    <!-- font awesoem -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection