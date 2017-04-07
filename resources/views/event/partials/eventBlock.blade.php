    <div class="services row-5">
        <div class="serviceBlock col-md-12">
            <div class="image" style="background-image: url(http://wvua23.com/wp-content/uploads/2015/04/school-stock.jpg)">

            </div>
            <div class="blurred contentPane">
                <h3 class="orange">{{ $event->name }}</h3>
                <p>
                    {!! $event->content !!}
                </p>
                <a class="button more vague-orange-background" href="{{ route('eventShow', $event->id) }}">Lees meer</a>
            </div>
        </div>
    </div>