<footer class="footer" id="footer">
    <div class="container">
        <div class="footer_top">
            <div class="footer_col footer_col_1">
                <a href="/">
                    <img src="{{ asset('img/logo.svg') }}" alt="logo">
                </a>

                <x-bvi-btn></x-bvi-btn>
            </div>
            <div class="footer_col footer_col_2">
                <p>Адрес: <br>{{ $contacts['adress']->value }}<br>Время работы: <br>{{ $contacts['work_time']->value }}</p>
                <a class="phone" href="tel:+7{{ phone_format($contacts['phone']->value) }}">{{ $contacts['phone']->value }}</a>
                <br>
                <p>Адрес: <br>{{ $contacts['adress_2']->value }}<br>Время работы: <br>{{ $contacts['work_time']->value }}</p>
                <a class="phone" href="tel:+7{{ phone_format($contacts['phone_2']->value) }}">{{ $contacts['phone_2']->value }}</a>

                <a href="#consultation" class="button">Записаться на прием</a>
            </div>
            <div class="footer_col footer_col_3">
                <x-menues.puncts name="Меню в подвале"></x-menues.puncts>
            </div>
            <div class="footer_col footer_col_4">
                <x-menues.puncts name="Главное меню в подвале"></x-menues.puncts>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="footer_copy">
                © ООО “Эстедент Плюс”
            </div>
            <div class="footer_links">
                <a href="/page/politika-v-oblasti-obrabotki-personalnyx-dannyx">Политика конфиденциальности</a>
                <a href="/page/soglasie-na-obrabotku-personalnyx-dannyx">Согласие на обработку персональных данных</a>
            </div>
        </div>
    </div>
</footer>
