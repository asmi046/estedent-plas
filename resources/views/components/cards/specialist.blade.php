<div class="personal_card">
    <div class="personal_card_img">
        <img src="{{ Storage::url($item->photo) }}" alt="{{ $item->fio }}">
    </div>
    <div class="personal_card_text">
        <h3>{{ $item->fio }}</h3>
        <p>{{ $item->position }}</p>
        <a href="#" class="button">Подробнее</a>
    </div>
</div>
