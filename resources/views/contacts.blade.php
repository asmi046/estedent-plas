@extends('layouts.all')

@section('main')
    <section class="page_section">
        <div class="container">
            <x-breadcrumbs.main title="Контакты"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">Контакты</h2>
            </div>

            <div class="page_content contacts_page_section">
                <div class="content">
                    <h1 class="inner_page_h1">Контакты нашей клиники</h1>

                    <div class="colls">
                        <div class="col">
                            <h2>Юридическая информация</h2>
                            <p class="label">Наименование:</p>
                            <p class="param">{{ $contacts['company_name'] }}</p>

                            <p class="label">ИНН:</p>
                            <p class="param">{{ $contacts['inn'] }}</p>

                            <p class="label">ОГРНИП:</p>
                            <p class="param">{{ $contacts['ogrn'] }}</p>

                            <p class="label">Лицензия:</p>
                            <p class="param">{{ $contacts['licenzia'] }}</p>

                            <p class="label">Регистрационный номер лицензии:</p>
                            <p class="param">{{ $contacts['licenzia_number'] }}</p>

                            <p class="label">Лицензирующий орган:</p>
                            <p class="param">{{ $contacts['licenzia_organ'] }}</p>
                        </div>

                        <div class="col">
                            <h2>Контакты</h2>
                            <p class="param">тел. <a class="phone" href="tel:+7{{ phone_format( $contacts['phone'] ) }}">{{ $contacts['phone'] }}</a></p>
                            <p class="param">тел. <a class="phone" href="tel:+7{{ phone_format( $contacts['phone_2'] ) }}">{{ $contacts['phone_2'] }}</a></p>
                            <p class="param">e-mail: <a class="email" href="mailto:{{ $contacts['email']}}">{{ $contacts['email'] }}</a></p>
                            <h2>Главный офис</h2>
                            <p class="param">Адрес: {{ $contacts['adress'] }}</p>
                            <p class="param">Режим работы: {{ $contacts['work_time'] }}</p>
                        </div>
                    </div>

                    <h2>Как добраться</h2>
                    <x-map.map-in-page
                        :name="$contacts['site_name']"
                        :geo="$contacts['geo']"
                        :adres="$contacts['adress']"
                        :phone="$contacts['phone']"

                        :geo2="$contacts['geo_2']"
                        :adres2="$contacts['adress_2']"
                        :phone2="$contacts['phone_2']"
                    ></x-map.map-in-page>


                </div>
            </div>
        </div>
    </section>
@endsection

