@props([
    'countclass' => '',
])
<section id="services-image-description-card" class="services-image-description-card {{ $countclass }}">
    <div class="container">
        <h2>{{ $title }}</h2>

        <div class="cards-grid">
            @isset($information)
                @foreach ($information as $item)
                    <div class="image-card">
                        @isset($item['picture'])
                            <div class="image-card__img">
                                <img src="{{ Storage::url($item['picture']) }}" alt="{{ $item['title'] ?? '' }}">
                            </div>
                        @endisset
                        <div class="image-card__content">
                            <h3>{{ $item['title'] }}</h3>
                            <div class="text_styles">{!! $item['content'] ?? '' !!}</div>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
</section>
