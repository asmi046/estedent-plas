<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ControlOrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('control_organizations')->insert([
            [
                'name' => 'Комитет здравоохранения Курской области',
                'address' => '305004, г. Курск, Красная площадь, д. 6',
                'phones' => '(4712) 51-47-20, 56-70-12',
                'email' => 'komzdrav@rkursk.ru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Управление Росздравнадзора по Курской области',
                'address' => '305004, г. Курск, ул. К-Маркса, д. 66-Б',
                'phones' => '(4712) 58-12-52',
                'email' => 'info@reg46.roszdravnadzor.ru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Роспотребнадзор по Курской области',
                'address' => '305004, г. Курск, ул. Ленина, д. 70',
                'phones' => '(4712) 56-72-09, 56-70-95',
                'email' => 'cgsen@kursktelecom.ru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Отдел лицензирования медицинской и фармацевтической деятельности Комитета здравоохранения по Курской области',
                'address' => '305004, г. Курск, ул. Л. Толстого, д. 14б',
                'phones' => '(4712) 58-67-17',
                'email' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Территориальный орган Федеральной службы по надзору в сфере здравоохранения по Курской области',
                'address' => 'г. Курск, ул. К. Маркса, 66-Б',
                'phones' => '+7 (4712) 58-12-52',
                'email' => 'info@reg46.roszdravnadzor.ru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Управление Федеральной службы по надзору в сфере защиты прав потребителей и благополучия человека по Курской области',
                'address' => 'г. Курск, ул. Ленина, д. 70',
                'phones' => '+7 (4712) 58-71-88',
                'email' => 'cgsen@kursktelecom.ru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ФБУЗ «Центр гигиены и эпидемиологии в Курской области»',
                'address' => 'г. Курск, ул. Почтовая, д. 3',
                'phones' => '+7 (4712) 70-01-09',
                'email' => 'cge@kursktelecom.ru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Курский центр лицензирования медицинской и фармацевтической деятельности',
                'address' => 'г. Курск, ул. Льва Толстого, 14Б, 1 этаж',
                'phones' => '+7 (4712) 58‒87‒42, +7 (4712) 58‒67‒17',
                'email' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

