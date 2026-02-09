@props([
    'countclass' => '',
])

<section id="services-number-card" class="services-number-card {{ $countclass }}">
    <div class="container">
        <h2>{{ $title }}</h2>

        <div class="cards-grid">
            @isset($information)
                @foreach ($information as $item)
                    <div class="number-card">
                        <div class="number-card__index">
                            {{ $loop->iteration }}.
                        </div>
                        <div class="number-card__title">
                            <h3>{{ $item['title'] }}</h3>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
</section>
