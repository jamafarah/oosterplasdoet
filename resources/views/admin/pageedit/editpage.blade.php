@extends('layouts.app')


@section('content')

    <link rel="stylesheet" href="{{ ('layouts.app') }}">
    <div class="banner row-2 orange-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">

        <h1 class="white">Beheer Omgeving</h1>
    </div>
    <a class="btn btn-lg orange-background white pull-right" type="submit" style="margin-top: 10px; border-radius: 0; top: calc(50vh)" href="/editpages"><b>Terug</b></a>
    <div class="container ">
        <form action="{{ route('updatepagecontent') }}" method="post">
            <div class="form-group">
                <input readonly hidden name="textarea_name" value="{!! $text->textarea_name !!}">
                <textarea class="form-control" name="content" id="input" rows="26">{!! $text->content !!}</textarea>
            </div>
            {{ csrf_field() }}
            <button type="submit">submit</button>
        </form>
    </div>

    @include(('../editor'))



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection