    <div class="services row-5">
        <div class="serviceBlock col-md-12 green-background" style="background-image: url(http://wvua23.com/wp-content/uploads/2015/04/school-stock.jpg)">
            <div class="blurred contentPane">
                <h3 class="orange">{{ $event->name }}</h3>
                <p>
                    {{ $event->content }}
                </p>
                <button class="more vague-orange-background"><a style="color: #fff" href="{{ route('eventShow', $event->id) }}">Lees meer</a></button>
            </div>
        </div>
    </div>