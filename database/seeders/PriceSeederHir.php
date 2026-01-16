<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PriceSeederHir extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('prices')->insert([
            [
                'service_code' => 'В01.067.001',
                'service_name' => 'Первичный осмотр врача-стоматолога-хирурга',
                'price' => 500,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'В01.003004.001',
                'service_name' => 'Анестезия',
                'price' => 500,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.001',
                'service_name' => 'Удаление зуба',
                'price' => 3000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.024',
                'service_name' => 'Удаление ретинированного и дистопированного зуба',
                'price' => 6000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.058',
                'service_name' => 'Лечение перикоронита (иссечение капюшона)',
                'price' => 1000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.059',
                'service_name' => 'Гемисекция зуба',
                'price' => 2000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16ю07.012', // обратите внимание: в коде присутствует кириллическая буква «ю»
                'service_name' => 'Вскрытие и дренирование одонтогенного абсцесса',
                'price' => 2000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.013',
                'service_name' => 'Отсроченный кюретаж лунки',
                'price' => 1500,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.042',
                'service_name' => 'Пластика уздечки верхней губы',
                'price' => 5000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.043',
                'service_name' => 'Пластика уздечки нижней губы',
                'price' => 5000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.044',
                'service_name' => 'Пластика уздечки языка',
                'price' => 4000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.055.001',
                'service_name' => 'Синус-лифтинг закрытый (поднятие дна гайморовой пазухи) с материалом',
                'price' => 6000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.055.002',
                'service_name' => 'Синус-лифтинг открытый',
                'price' => 25000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.007',
                'service_name' => 'Резекция верхушки корня (без материала)',
                'price' => 5000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'service_code' => 'А16.07.054.001',
                'service_name' => 'Внутрикостная дентальная имплантация имплантами NDI (Германия)',
                'price' => 30000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.054.002',
                'service_name' => 'Внутрикостная дентальная имплантация имплантами Bicon (США)',
                'price' => 40000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.054.003',
                'service_name' => 'Формирователь десны для имплантов NDI (Германия)',
                'price' => 3000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.054.004',
                'service_name' => 'Формирователь десны для имплантов BICON (США)',
                'price' => 4000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.017',
                'service_name' => 'Пластика альвеолярного отростка (без материала)',
                'price' => 5000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.017.003',
                'service_name' => 'Использование мембраны для коррекции объёма и формы альвеолярного отростка: мембрана 15×15 мм',
                'price' => 4000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.017.003',
                'service_name' => 'Использование мембраны для коррекции объёма и формы альвеолярного отростка: мембрана 15×25 мм',
                'price' => 6000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.017.004',
                'service_name' => 'Использование остеопластического материала для коррекции объёма и формы альвеолярного отростка (одна порция — 1 см³)',
                'price' => 2000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.040',
                'service_name' => 'Лоскутная операция в полости рта (один зуб)',
                'price' => 2000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.040.003',
                'service_name' => 'Закрытие рецессии одного зуба — 1‑й этап',
                'price' => 7000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.040.003',
                'service_name' => 'Закрытие рецессии одного зуба — 2‑й этап',
                'price' => 4000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.096',
                'service_name' => 'Пластика перфорации верхнечелюстной пазухи',
                'price' => 6000,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А16.07.097',
                'service_name' => 'Наложение швов на слизистую оболочку рта',
                'price' => 800,
                'unit' => 'Хирургическая стоматология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
