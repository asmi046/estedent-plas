<section id="services-title-description-card" class="services-title-description-card">
    <div class="container">
        <h2>{{ $title }}</h2>

        <div class="cards-grid">
            @isset($information)
                @foreach($information as $item)
                    <div class="td-card">
                        <h3>{{ $item['title'] }}</h3>
                        <div class="text_styles">{!! $item['content'] !!}</div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
</section>
