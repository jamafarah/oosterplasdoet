@extends('layouts.app')


@section('content')

    <link rel="stylesheet" href="{{ ('css/app.css') }}">
    <div class="banner row-6 orange-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">

        <h1 class="white">Studie begeleiding</h1>
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

    <a class="btn btn-lg orange-background sign-up-button white pull-right" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="#"><b>Aanmelden</b></a>
    @include('studiesignup')

    <div class="container">
        {!! $content->content !!}

    </div>

    <!-- font awesoem -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection
@section('script')
    <script>
        $(function(){
           $(".sign-up-button").click(function(){
               $(".sign-up-block").toggleClass("active");
           });
        });
    </script>
@endsection