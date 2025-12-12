<a  href="{{ route('services.page', ['slug' => $item->slug]) }}" class="services_card">
    <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
    <h3>{{ $item->title }}</h3>
</a>
