<section id="services-image-description-card" class="services-image-description-card">
    <div class="container">
        <h2>{{ $title ?? '' }}</h2>

        <div class="cards-grid">
            @isset($items)
                @foreach($items as $item)
                    <div class="image-card">
                        @isset($item['img'])
                            <div class="image-card__img">
                                <img src="{{ $item['img'] }}" alt="{{ $item['title'] ?? '' }}">
                            </div>
                        @endisset
                        <div class="image-card__content">
                            <h3>{{ $item['title'] ?? '' }}</h3>
                            <div class="text_styles">{!! $item['description'] ?? '' !!}</div>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
</section>
