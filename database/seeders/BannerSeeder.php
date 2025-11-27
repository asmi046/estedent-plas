<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("bn_picture/main_1.webp", file_get_contents(public_path('tmp_data/bn/main_1.webp')), 'public');
        Storage::disk('public')->put("bn_picture/main_2.webp", file_get_contents(public_path('tmp_data/bn/main_2.webp')), 'public');
        Storage::disk('public')->put("bn_picture/main_3.webp", file_get_contents(public_path('tmp_data/bn/main_3.webp')), 'public');
        Storage::disk('public')->put("bn_picture/main_4.webp", file_get_contents(public_path('tmp_data/bn/main_4.webp')), 'public');

        Storage::disk('public')->put("bn_picture/p1.webp", file_get_contents(public_path('tmp_data/photo/p1.webp')), 'public');
        Storage::disk('public')->put("bn_picture/p2.webp", file_get_contents(public_path('tmp_data/photo/p2.webp')), 'public');
        Storage::disk('public')->put("bn_picture/p3.webp", file_get_contents(public_path('tmp_data/photo/p3.webp')), 'public');
        Storage::disk('public')->put("bn_picture/p4.webp", file_get_contents(public_path('tmp_data/photo/p4.webp')), 'public');
        Storage::disk('public')->put("bn_picture/p5.webp", file_get_contents(public_path('tmp_data/photo/p5.webp')), 'public');
        DB::table('banners')->insert([
            [
                'name' => 'Главный баннер',
                'title' => 'Стоматологическая клиника Естедент Плас, все стоматологические услуги в Курске',
                'sort_order' => 10,
                'img' => 'bn_picture/main_1.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Главный баннер',
                'title' => 'Профессиональная команда стоматологов в Курске',
                'sort_order' => 20,
                'img' => 'bn_picture/main_2.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Главный баннер',
                'title' => 'Современное стоматологическое оборудование',
                'sort_order' => 30,
                'img' => 'bn_picture/main_3.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Главный баннер',
                'title' => 'Удобное расположение в центре Курска и доступные цены на стоматологические услуги',
                'sort_order' => 40,
                'img' => 'bn_picture/main_4.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // ------------------------------
            [
                'name' => 'Галерея клиники',
                'title' => 'Новейшее стоматологическое оборудование',
                'sort_order' => 10,
                'img' => 'bn_picture/p1.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Галерея клиники',
                'title' => 'Новейшее стоматологическое оборудование',
                'sort_order' => 20,
                'img' => 'bn_picture/p2.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Галерея клиники',
                'title' => 'Новейшее стоматологическое оборудование',
                'sort_order' => 30,
                'img' => 'bn_picture/p3.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Галерея клиники',
                'title' => 'Новейшее стоматологическое оборудование',
                'sort_order' => 40,
                'img' => 'bn_picture/p4.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Галерея клиники',
                'title' => 'Новейшее стоматологическое оборудование',
                'sort_order' => 50,
                'img' => 'bn_picture/p5.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
