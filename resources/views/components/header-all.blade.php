    <header class="header">
        <div class="container">
            <div class="header__logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.svg') }}" alt="{{ $contacts['site_name']->value }}" >
                </a>
            </div>

            <div class="header__mobile_phone">
                <a href="tel:+7{{ phone_format($contacts['phone']->value) }}">
                    <svg class="icon icon-phone_icon">
                        <use xlink:href="#phone_icon"></use>
                    </svg>
                </a>
            </div>

            <div class="header__address">
                Адрес: {{ $contacts['adress']->value }} <br>{{ $contacts['work_time']->value }}
            </div>
            <div class="header__phone">
                <a href="tel:+7{{ phone_format($contacts['phone']->value) }}">{{ $contacts['phone']->value }}</a>
            </div>
            <div class="header__button">
                <a href="#consultation" class="button">Записаться</a>
            </div>
        </div>
    </header>

    <section class="main_menu_section">
        <div class="container">
            <nav class="main_menu">
                <x-menues.puncts></x-menues.puncts>
            </nav>
        </div>
    </section>
