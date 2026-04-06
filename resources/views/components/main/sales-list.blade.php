<section class="sales">
    <div class="container">
        <h2 class="sales__title">Наши Акции</h2>
        <div class="sales_list_wrap">
            @foreach ($sales as $sale)
                <x-cards.sale :item="$sale"></x-cards.sale>
            @endforeach
        </div>
        <br>
        <br>
        <a href="{{ route('sales') }}" class="button">Смотреть все акции</a>
    </div>

</section>
