    <section class="services" id="services">
        <div class="container">
            <h2>Услуги стоматологии “Эстедент плюс”</h2>
            <div class="services_wrap">
                @foreach ($services as $item)
                    <x-cards.service :item="$item" />
                @endforeach
            </div>
        </div>
    </section>
