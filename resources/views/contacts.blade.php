@extends('layouts.all')

@section('main')
    <x-headers.page-header title="Контакты нашей клиники"></x-headers.page-header>
    <section class="page_section">
        <div class="container">
            <div class="page_content contacts_page_section">
                <div class="content">

                    <div class="colls">
                        <div class="col">
                            <h2>Юридическая информация</h2>
                            <p class="label">Наименование:</p>
                            <p class="param mb-10">{{ $contacts['company_name'] }}</p>

                            <p class="label">ИНН:</p>
                            <p class="param mb-10">{{ $contacts['inn'] }}</p>

                            <p class="label">ОГРНИП:</p>
                            <p class="param mb-10">{{ $contacts['ogrn'] }}</p>

                            <p class="label">Лицензия:</p>
                            <p class="param mb-10">{{ $contacts['licenzia'] }}</p>

                            <p class="label">Регистрационный номер лицензии:</p>
                            <p class="param mb-10">{{ $contacts['licenzia_number'] }}</p>

                            <p class="label">Лицензирующий орган:</p>
                            <p class="param mb-10">{{ $contacts['licenzia_organ'] }}</p>
                        </div>

                        <div class="col">
                            <h2>Контакты</h2>



                            <p class="param mb-10">Адрес: {{ $contacts['adress'] }}</p>
                            <p class="param mb-10">Режим работы: {{ $contacts['work_time'] }}</p>
                            <p class="param mb-10">тел. <a class="phone"
                                    href="tel:+7{{ phone_format($contacts['phone']) }}">{{ $contacts['phone'] }}</a></p>
                            <br>
                            <p class="param mb-10">Адрес: {{ $contacts['adress_2'] }}</p>
                            <p class="param mb-10">Режим работы: {{ $contacts['work_time'] }}</p>
                            <p class="param mb-10">тел. <a class="phone"
                                    href="tel:+7{{ phone_format($contacts['phone_2']) }}">{{ $contacts['phone_2'] }}</a>
                            </p>
                            <br>
                            <p class="param mb-10">e-mail: <a class="email"
                                    href="mailto:{{ $contacts['email'] }}">{{ $contacts['email'] }}</a></p>
                        </div>
                    </div>

                    <h2>Как добраться</h2>
                    <x-map.map-in-page :name="$contacts['site_name']" :geo="$contacts['geo']" :adres="$contacts['adress']" :phone="$contacts['phone']"
                        :geo2="$contacts['geo_2']" :adres2="$contacts['adress_2']" :phone2="$contacts['phone_2']"></x-map.map-in-page>


                </div>
            </div>
            <br>
            <details>
                <summary>Контролирующие организации</summary>
                <div class="response">
                    @foreach ($organizations as $item)
                        <div class="org_item">
                            <h3>{{ $item['name'] }}</h3>
                            <p>Адрес: {{ $item['address'] }}</p>
                            <p>Телефон: {{ $item['phones'] }}</p>
                            <p>e-mail: {{ $item['email'] }}</p>
                        </div>
                    @endforeach
                </div>
            </details>
        </div>
    </section>
@endsection
