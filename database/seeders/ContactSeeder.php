<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("contacts")->insert(
            [
                [
                    'name' => 'site_name',
                    'title' => 'Имя сайта',
                    'value' => 'Стоматология «Эстедент Плюс»',
                ],

                [
                    'name' => 'phone',
                    'title' => 'Телефон',
                    'value' => '+7 (4712) 78-77-00',
                ],

                [
                    'name' => 'phone_2',
                    'title' => 'Телефон 2',
                    'value' => '+7 (4712) 78-77-77',
                ],
                [
                    'name' => 'phone_3',
                    'title' => 'Телефон 3',
                    'value' => '+7 (903) 639-52-22',
                ],

                [
                    'name' => 'tg_lnk',
                    'title' => 'Ссылка  на Телеграм',
                    'value' => '#',
                ],

                [
                    'name' => 'vk_lnk',
                    'title' => 'Ссылка  на Vk',
                    'value' => 'https://vk.com/estedent_plus',
                ],

                [
                    'name' => 'ws_lnk',
                    'title' => 'Ссылка  на WhatsApp',
                    'value' => '#',
                ],

                [
                    'name' => 'adress',
                    'title' => 'Адрес компании',
                    'value' => 'г. Курск, ул. Павлуновского, 114',
                ],

                [
                    'name' => 'work_time',
                    'title' => 'Время работы',
                    'value' => 'Пн-Пт 09:00 - 18:00 Сб 09:00 - 14:00',
                ],

                [
                    'name' => 'email',
                    'title' => 'E-mail',
                    'value' => 'estedent100@yandex.ru',
                ],



                [
                    'name' => 'inn',
                    'title' => 'ИНН',
                    'value' => '4632154965',
                ],

                [
                    'name' => 'ogrn',
                    'title' => 'ОГРН',
                    'value' => '1114632006983',
                ],

                [
                    'name' => 'licenzia',
                    'title' => 'Лицензия',
                    'value' => 'ЛО-46-002143, от 22 мая 2019 г',
                ],


                [
                    'name' => 'licenzia_number',
                    'title' => 'Регистрационный номер лицензии',
                    'value' => 'ЛО41-01147-46/00331573',
                ],

                [
                    'name' => 'licenzia_organ',
                    'title' => 'Лицензирующий орган',
                    'value' => 'Министерство здравоохранения Курской области',
                ],


                [
                    'name' => 'geo',
                    'title' => 'Кординаты',
                    'value' => '61.26667125324669,73.42057220370485',
                ],

            ]
        );
    }
}
