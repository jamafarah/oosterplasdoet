<div class="row-5 services">
    <div class="col-md-12 lib-item serviceBlock">
        <div class="lib-panel">
            <div class="row blurred contentPane">
                <div class="col-md-4 no-padding">
                    <img class="lib-img-show" src="http://wvua23.com/wp-content/uploads/2015/04/school-stock.jpg">
                </div>
                <div class="col-md-8">
                    <div class="lib-row lib-header">
                        <h3 class="orange">{{ $news->title }}</h3>
                        <div class="lib-header-seperator"></div>
                    </div>
                    <div class="lib-row lib-desc">
                        <p>
                            {!! $news->content !!}
                        </p>
                        Geplaatst op: {{ Carbon::createFromFormat('Y-m-d H:i:s', $news->created_at)->format('H:i d-m-Y') }}<br />
                        Geupdated op: {{ Carbon::createFromFormat('Y-m-d H:i:s', $news->updated_at)->format('H:i d-m-Y') }}<br /><br />
                        <a class="button more vague-orange-background" href="{{ route('newsShow', $news->id) }}">Lees meer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>