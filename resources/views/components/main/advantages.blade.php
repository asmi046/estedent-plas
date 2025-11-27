<section class="advantages" id="advantages">
    <div class="container">
        <div class="advantages_wrap">
            @foreach ($advantages as $item)
                <x-cards.adv :item="$item"></x-cards.adv>
            @endforeach
        </div>
    </div>
</section>
