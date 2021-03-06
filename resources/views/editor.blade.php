
<script src="{{ URL::to('js/vendor/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        var editor_config = {
    path_absolute : "{{ URL::to('/') }}/",
            selector : "textarea",
            language: 'nl',
            content_css : '{{ ('../css/app.css') }}',
            fontsize_formats: "8px 10px 12px 14px 18px 24px 36px",
            plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern "
    ],
//            file: {title: 'File', items: 'newdocument'},
//            edit: {title: 'Edit', items: 'undo redo | cut copy paste pastetext | selectall'},
//            insert: {title: 'Insert', items: 'link media | template hr'},
//            view: {title: 'View', items: 'visualaid'},
//            format: {title: 'Format', items: 'bold italic underline strikethrough superscript subscript | formats | removeformat'},
//            table: {title: 'Table', items: 'inserttable tableprops deletetable | cell row column'},
//            tools: {title: 'Tools', items: 'spellchecker code'}
            menubar: "edit,table",
            toolbar: "undo redo | fontsizeselect | forecolor backcolor | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            media_poster: false,

            media_dimensions: false,
            media_alt_source: false,
            media_live_embeds: false,

            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>﻿
<script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
</script>
