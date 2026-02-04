<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ParametrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Storage::disk('public')->put("parametr/main_top.webp", file_get_contents(public_path('tmp_data/main_banner.webp')), 'public');

        // Storage::disk('public')->put("parametr/adv_1.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_1.svg')), 'public');
        // Storage::disk('public')->put("parametr/adv_2.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_2.svg')), 'public');
        // Storage::disk('public')->put("parametr/adv_3.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_3.svg')), 'public');
        // Storage::disk('public')->put("parametr/adv_4.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_4.svg')), 'public');
        // Storage::disk('public')->put("parametr/adv_5.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_5.svg')), 'public');

        // Storage::disk('public')->put("parametr/pay_1.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_1.svg')), 'public');
        // Storage::disk('public')->put("parametr/pay_2.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_2.svg')), 'public');
        // Storage::disk('public')->put("parametr/pay_3.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_3.svg')), 'public');
        // Storage::disk('public')->put("parametr/pay_4.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_4.svg')), 'public');
        // Storage::disk('public')->put("parametr/pay_5.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_5.svg')), 'public');
        // Storage::disk('public')->put("parametr/pay_6.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_6.svg')), 'public');

        $data = [
            [
                'str_id' => 'main_1',
                'section' => 'Главный баннер',

                'title' => 'Стоматологическая клиника Эстедент плюс',
                'value' => 'Мы дарить вам здоровую и красивую улыбку, которая станет вашим пропуском в мир успеха и уверенности',
                'img' => null,
            ],

            [
                'str_id' => 'main_2',
                'section' => 'Главный баннер',

                'title' => 'Список',
                'value' => '<ul> <li>Передовые технологии и мастерство, отточенное временем</li> <li>Многолетняя репутация семейной стоматологии</li> <li>Опытные врачи со стажем 6-19 лет</li> </ul>',
                'img' => null,
            ],

            [
                'str_id' => 'cta_1',
                'section' => 'CTA блок на главной',

                'title' => 'Подробная консультация и подбор плана лечения',
                'value' => null,
                'img' => null,
            ],
            [
                'str_id' => 'cta_2',
                'section' => 'CTA блок на главной',

                'title' => 'Работаем для вас с 09:00-20:00',
                'value' => null,
                'img' => null,
            ],
            [
                'str_id' => 'cta_3',
                'section' => 'CTA блок на главной',

                'title' => '+7 (4712) 78-77-77',
                'value' => null,
                'img' => null,
            ],
            [
                'str_id' => 'cta_4',
                'section' => 'CTA блок на главной',

                'title' => '+7 (4712) 78-77-00',
                'value' => null,
                'img' => null,
            ],

        ];

        DB::table('parametrs')->insert($data);

    }
}
