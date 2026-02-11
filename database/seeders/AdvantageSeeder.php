<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put('advantages/adv_1.svg', file_get_contents(public_path('img/icon/adv/adv_1.svg')), 'public');
        Storage::disk('public')->put('advantages/adv_2.svg', file_get_contents(public_path('img/icon/adv/adv_2.svg')), 'public');
        Storage::disk('public')->put('advantages/adv_3.svg', file_get_contents(public_path('img/icon/adv/adv_3.svg')), 'public');

        DB::table('advantages')->insert([
            [
                'title' => 'Современное оборудование',
                'description' => 'Используем передовые технологии и цифровую диагностику для точного и безболезненного лечения',
                'icon' => 'advantages/adv_1.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Опытные специалисты',
                'description' => 'Команда врачей с многолетней практикой и узкой специализацией в различных областях стоматологии',
                'icon' => 'advantages/adv_2.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Удобное расположение',
                'description' => 'Для Вашего удобства мы расположены по двум адресам: ул 1я Пушкарная, дом 21 и ул. Павлуновского, дом 114.',
                'icon' => 'advantages/adv_3.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
