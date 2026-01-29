<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'menu_name' => 'Главное меню',
                'title' => 'Услуги',
                'order' => 1,
                'lnk' => '/services',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Специалисты',
                'order' => 2,
                'lnk' => '/specialists',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Цены',
                'order' => 3,
                'lnk' => '/prices',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Акции',
                'order' => 4,
                'lnk' => '/sales',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Клиника',
                'order' => 5,
                'lnk' => '/about',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Контакты',
                'order' => 6,
                'lnk' => '/contacts',
            ],
        ];

        DB::table('menus')->insert($data);

        $footer_menu = [
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Имплантация',
                'order' => 1,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Протезирование',
                'order' => 2,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Коронки',
                'order' => 3,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Лечение',
                'order' => 4,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Отбеливание',
                'order' => 5,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Хирургия',
                'order' => 6,
                'lnk' => '#',
            ],
        ];

        DB::table('menus')->insert($footer_menu);

        $footer_menu_2 = [
            [
                'menu_name' => 'Главное меню в подвале',
                'title' => 'Услуги',
                'order' => 1,
                'lnk' => '/services',
            ],
            [
                'menu_name' => 'Главное меню в подвале',
                'title' => 'Специалисты',
                'order' => 2,
                'lnk' => '/specialists',
            ],
            [
                'menu_name' => 'Главное меню в подвале',
                'title' => 'Цены',
                'order' => 3,
                'lnk' => '/prices',
            ],
            [
                'menu_name' => 'Главное меню в подвале',
                'title' => 'Акции',
                'order' => 4,
                'lnk' => '/sales',
            ],
            [
                'menu_name' => 'Главное меню в подвале',
                'title' => 'Клиника',
                'order' => 5,
                'lnk' => '/about',
            ],
            [
                'menu_name' => 'Главное меню в подвале',
                'title' => 'Контакты',
                'order' => 6,
                'lnk' => '/contacts',
            ],
            [
                'menu_name' => 'Главное меню в подвале',
                'title' => 'Правовая информация',
                'order' => 7,
                'lnk' => '/legal_documents',
            ],
        ];

        DB::table('menus')->insert($footer_menu_2);
    }
}
