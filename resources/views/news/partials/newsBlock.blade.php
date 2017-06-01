<div class="row-5 services">
    <div class="col-md-12 lib-item serviceBlock">
        <div class="lib-panel">
            <div class="row blurred contentPane">
                <div class="col-md-4 no-padding">
                    <img class="lib-img-show" src="{{ asset('/img/nieuws/' . $news->img) }}">
                </div>
                <div class="col-md-8">
                    <div class="lib-row lib-header">
                        <h3 class="orange">{{ $news->title }}</h3>
                        <div class="lib-header-seperator"></div>
                    </div>
                    <div class="lib-row lib-desc">
                        <p>
                            {!! $news->intro !!}
                        </p>
                        Geplaatst op: {{ Carbon::createFromFormat('Y-m-d H:i:s', $news->created_at)->format('H:i d-m-Y') }}<br />
                        Geupdated op: {{ Carbon::createFromFormat('Y-m-d H:i:s', $news->updated_at)->format('H:i d-m-Y') }}<br /><br />
                    </div>
                </div>
                <a class="button more orange-background" href="{{ route('newsShow', $news->id) }}">Lees meer</a>
            </div>
        </div>
    </div>
</div>