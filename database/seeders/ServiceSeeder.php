<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put('services/serv_1.webp', file_get_contents(public_path('tmp_data/services/serv_1.webp')), 'public');
        Storage::disk('public')->put('services/serv_2.webp', file_get_contents(public_path('tmp_data/services/serv_2.webp')), 'public');
        Storage::disk('public')->put('services/serv_3.webp', file_get_contents(public_path('tmp_data/services/serv_3.webp')), 'public');
        Storage::disk('public')->put('services/serv_4.webp', file_get_contents(public_path('tmp_data/services/serv_4.webp')), 'public');
        Storage::disk('public')->put('services/serv_5.webp', file_get_contents(public_path('tmp_data/services/serv_5.webp')), 'public');
        Storage::disk('public')->put('services/serv_6.webp', file_get_contents(public_path('tmp_data/services/serv_6.webp')), 'public');

        Storage::disk('public')->put('services/system_1.webp', file_get_contents(public_path('tmp_data/services/system_1.webp')), 'public');
        Storage::disk('public')->put('services/system_2.webp', file_get_contents(public_path('tmp_data/services/system_2.webp')), 'public');
        Storage::disk('public')->put('services/system_3.webp', file_get_contents(public_path('tmp_data/services/system_3.webp')), 'public');

        include_once 'services/implantation.php';
        include_once 'services/prosthetics.php';
        include_once 'services/crowns.php';
        include_once 'services/treatment.php';
        include_once 'services/whitening.php';
        include_once 'services/surgery.php';

        $services = [
            [
                'title' => 'Хирургия',
                'short_title' => 'Хирургия',
                'img' => 'services/serv_4.webp',
                'slug' => 'surgery',
                'template' => 'template.surgery',
                'price' => 'от 8 000 ₽',
                'time' => '1-2 часа',
                'order' => 0,
                'sections' => json_encode($surgery),
                'description' => file_get_contents(public_path('tmp_data/services/surgery.html')),
            ],
            [
                'title' => 'Имплантация',
                'short_title' => 'Имплантация',
                'img' => 'services/serv_1.webp',
                'slug' => 'implantation',
                'template' => 'template.implantation',
                'price' => 'от 30 000 ₽',
                'time' => '3-6 месяцев',
                'order' => 1,
                'sections' => json_encode($implantation),
                'description' => file_get_contents(public_path('tmp_data/services/implantation.html')),
            ],
            [
                'title' => 'Протезирование',
                'short_title' => 'Протезирование',
                'img' => 'services/serv_2.webp',
                'slug' => 'prosthetics',
                'template' => 'template.prosthetics',
                'price' => 'от 10 000 ₽',
                'time' => '1-2 недели',
                'order' => 2,
                'sections' => json_encode($prosthetics),
                'description' => file_get_contents(public_path('tmp_data/services/prosthetics.html')),
            ],
            [
                'title' => 'Коронки',
                'short_title' => 'Коронки',
                'img' => 'services/serv_3.webp',
                'slug' => 'crowns',
                'template' => 'template.crowns',
                'price' => 'от 5 000 ₽',
                'time' => '1-2 недели',
                'order' => 3,
                'sections' => json_encode($crowns),
                'description' => file_get_contents(public_path('tmp_data/services/crowns.html')),
            ],
            [
                'title' => 'Терапия',
                'short_title' => 'Терапия',
                'img' => 'services/serv_6.webp',
                'slug' => 'treatment',
                'template' => 'template.treatment',
                'price' => 'от 3 000 ₽',
                'time' => '1-3 сеанса',
                'order' => 4,
                'sections' => json_encode($treatment),
                'description' => file_get_contents(public_path('tmp_data/services/treatment.html')),
            ],
            [
                'title' => 'Отбеливание',
                'short_title' => 'Отбеливание',
                'img' => 'services/serv_5.webp',
                'slug' => 'whitening',
                'template' => 'template.whitening',
                'price' => 'от 5 000 ₽',
                'time' => '1-2 часа',
                'order' => 5,
                'sections' => json_encode($whitening),
                'description' => file_get_contents(public_path('tmp_data/services/whitening.html')),
            ],

        ];

        foreach ($services as $service) {
            $pageId = DB::table('services')->insertGetId($service);

            DB::table('seo_data')->insert(
                [
                    'url' => 'services/'.$service['slug'],
                    'seo_title' => $service['title'],
                    'seo_description' => $service['title'],
                    'seoable_id' => $pageId,
                    'seoable_type' => "App\Models\Service",
                ]
            );
        }
    }
}
