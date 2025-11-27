<section class="cta" id="cta">
    <div class="container">
        <div class="cta_wrap">
            <h2>{{ $cta['cta_1']->title ?? '' }}</h2>
            <div class="cta_decor_block"></div>
            <div class="cta_contact_block">
                <p>{{ $cta['cta_2']->title ?? '' }}</p>
                {{-- <a class="phone" href="tel:+7{{ phone_format($cta['cta_3']->title) }}">{{ $cta['cta_3']->title ?? '' }}</a> --}}
            </div>
            <div class="cta_button_block">
                <a href="#consultation" class="button">Обратный звонок</a>
            </div>
        </div>
    </div>
</section>
