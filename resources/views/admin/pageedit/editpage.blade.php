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
        <script src="{{ URL::to('js/vendor/tinymce/js/tinymce/tinymce.min.js') }}"></script>
        <script>
            var editor_config = {
                path_absolute : "{{ URL::to('/') }}/",
                selector : "textarea",
                language: 'nl',
                content_css : '{{ ('../css/app.css') }}',
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table contextmenu directionality",
                    "emoticons template paste textcolor colorpicker textpattern "
                ],
                toolbar: "insertfile undo redo | forecolor backcolor | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                relative_urls: false,
                file_browser_callback : function(field_name, url, type, win) {
                    var x = window.innerWidth || document.documentElement.clientWidth || document.getElementByTagName('body')[0].clientWidth;
                    var y = window.innerHeight|| document.documentElement.clientHeight|| document.grtElementByTagName('body')[0].clientHeight;
                    var cmsURL = editor_config.path_absolute+'laravel-filemanaget?field_name'+field_name;
                    if (type = 'image') {
                        cmsURL = cmsURL+'&type=Images';
                    } else {
                        cmsUrl = cmsURL+'&type=Files';
                    }

                    tinyMCE.activeEditor.windowManager.open({
                        file : cmsURL,
                        title : 'Filemanager',
                        width : x * 0.8,
                        height : y*0.8 ,
                        resizeble : 'yes',
                        close_previous : 'no'
                    });
                }
            };

            tinymce.init(editor_config);
        </script>﻿



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection