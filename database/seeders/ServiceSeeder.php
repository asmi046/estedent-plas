<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

         Storage::disk('public')->put("services/serv_1.webp", file_get_contents(public_path('tmp_data/services/serv_1.webp')), 'public');
         Storage::disk('public')->put("services/serv_2.webp", file_get_contents(public_path('tmp_data/services/serv_2.webp')), 'public');
         Storage::disk('public')->put("services/serv_3.webp", file_get_contents(public_path('tmp_data/services/serv_3.webp')), 'public');
         Storage::disk('public')->put("services/serv_4.webp", file_get_contents(public_path('tmp_data/services/serv_4.webp')), 'public');
         Storage::disk('public')->put("services/serv_5.webp", file_get_contents(public_path('tmp_data/services/serv_5.webp')), 'public');
         Storage::disk('public')->put("services/serv_6.webp", file_get_contents(public_path('tmp_data/services/serv_6.webp')), 'public');
        $services = [
            [
                'title' => 'Имплантация',
                'short_title' => 'Имплантация',
                'img' => 'services/serv_1.webp',
                'slug' => 'implantation',
                'template' => 'implantation',
                'price' => 'от 30 000 ₽',
                'time' => '3-6 месяцев',
                'order' => 1,
                'description' => file_get_contents(public_path('tmp_data/services/implantation.html')),
            ],
            [
                'title' => 'Протезирование',
                'short_title' => 'Протезирование',
                'img' => 'services/serv_2.webp',
                'slug' => 'prosthetics',
                'template' => 'prosthetics',
                'price' => 'от 10 000 ₽',
                'time' => '1-2 недели',
                'order' => 2,
                'description' => 'Восстановление зубов с помощью современных протезов и протезных конструкций. Индивидуальное изготовление протезов высокого качества.'
            ],
            [
                'title' => 'Коронки',
                'short_title' => 'Коронки',
                'img' => 'services/serv_3.webp',
                'slug' => 'crowns',
                'template' => 'crowns',
                'price' => 'от 5 000 ₽',
                'time' => '1-2 недели',
                'order' => 3,
                'description' => 'Установка коронок для защиты и восстановления повреждённых зубов. Современные материалы и технологии для максимальной прочности.'
            ],
            [
                'title' => 'Лечение',
                'short_title' => 'Лечение',
                'img' => 'services/serv_4.webp',
                'slug' => 'treatment',
                'template' => 'treatment',
                'price' => 'от 3 000 ₽',
                'time' => '1-3 сеанса',
                'order' => 4,
                'description' => 'Профессиональное лечение заболеваний зубов и дёсен. Современные методы лечения кариеса и эндодонтического лечения.'
            ],
            [
                'title' => 'Отбеливание',
                'short_title' => 'Отбеливание',
                'img' => 'services/serv_5.webp',
                'slug' => 'whitening',
                'template' => 'whitening',
                'price' => 'от 5 000 ₽',
                'time' => '1-2 часа',
                'order' => 5,
                'description' => 'Профессиональное отбеливание зубов для получения белоснежной улыбки. Безопасные и эффективные системы отбеливания.'
            ],
            [
                'title' => 'Хирургия',
                'short_title' => 'Хирургия',
                'img' => 'services/serv_6.webp',
                'slug' => 'surgery',
                'template' => 'surgery',
                'price' => 'от 8 000 ₽',
                'time' => '1-2 часа',
                'order' => 6,
                'description' => 'Сложные хирургические вмешательства в области стоматологии. Опытные хирурги и современное оборудование.'
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
