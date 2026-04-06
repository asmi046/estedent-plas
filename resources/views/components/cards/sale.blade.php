<a href="{{ route('sales.page', $item->slug) }}" class="sale_card">
    <div class="sale_card_img">
        <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
    </div>
    <div class="sale_card_info">
        <h3>{{ $item->title }}</h3>
        <p>{{ $item->short_description }}</p>

        <button>Подробнее</button>
    </div>
</a>
