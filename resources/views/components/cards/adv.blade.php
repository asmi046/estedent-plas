<div class="advantages_item">
    <div class="advantages_item_icon">
        <img src="{{ Storage::url($item->icon) }}" alt="{{ $item->title }}">
    </div>
    <div class="advantages_item_text_block">
        <h2>{{ $item->title }}</h2>
        <p>{!! $item->description !!}</p>
    </div>
</div>
