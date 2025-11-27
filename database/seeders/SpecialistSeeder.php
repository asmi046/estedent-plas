<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Копирование сертификатов в хранилище
        $certs = [
            'bokareva_anastasia_1.jpg', 'bokoreva_1.png', 'bokoreva_2.png', 'bokorev_1.png',
            'bokorev_2.png', 'bokorev_3.png', 'bokorev_4.png', 'chebotaev_1.png',
            'kozakova_1.png', 'shugaev_1.png', 'zadorozgnaya_1.png'
        ];

        foreach ($certs as $cert) {
            Storage::disk('public')->put(
                "specialists/{$cert}",
                file_get_contents(public_path("tmp_data/doctors/{$cert}")),
                'public'
            );
        }

        // Копирование фото в хранилище
        $photos = [
            'aluntieva.webp', 'bokarev.webp', 'bokareva.webp', 'bokareva_anastasia.webp',
            'bokarev_artur.webp', 'chebotaev.webp', 'isaeva.webp', 'kanisheeva.webp',
            'kazakova.webp', 'leonova.webp', 'sherbina.webp', 'shugaev.webp',
            'tupalov.webp', 'vlasova.webp', 'zadoroznaya.webp'
        ];

        foreach ($photos as $photo) {
            Storage::disk('public')->put(
                "specialists/{$photo}",
                file_get_contents(public_path("tmp_data/doctors/{$photo}")),
                'public'
            );
        }

        DB::table('specialists')->insert([
            [
                'fio' => 'Бокарев Федор Вячеславович',
                'photo' => 'specialists/bokarev.webp',
                'slug' => Str::slug('Бокарев Федор Вячеславович'),
                'position' => 'генеральный директор, главный врач',
                'description' => '',
                'sort_order' => 10,
                'certificates' => json_encode([
                    'specialists/bokorev_1.png',
                    'specialists/bokorev_2.png',
                    'specialists/bokorev_3.png',
                    'specialists/bokorev_4.png',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fio' => 'Бокарева Жанна Валентиновна',
                'photo' => 'specialists/bokareva.webp',
                'slug' => Str::slug('Бокарева Жанна Валентиновна'),
                'position' => 'врач-стоматолог-терапевт-хирург',
                'description' => '',
                'sort_order' => 20,
                'certificates' => json_encode([
                    'specialists/bokoreva_1.png',
                    'specialists/bokoreva_2.png',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fio' => 'Казакова Виктория Викторовна',
                'photo' => 'specialists/kazakova.webp',
                'slug' => Str::slug('Казакова Виктория Викторовна'),
                'position' => 'врач-стоматолог-терапевт',
                'description' => '',
                'sort_order' => 30,
                'certificates' => json_encode(['specialists/kozakova_1.png']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fio' => 'Шугаев Александр Иванович',
                'photo' => 'specialists/shugaev.webp',
                'slug' => Str::slug('Шугаев Александр Иванович'),
                'position' => 'врач-стоматолог-ортопед',
                'description' => '',
                'sort_order' => 40,
                'certificates' => json_encode(['specialists/shugaev_1.png']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fio' => 'Бокарева Анастасия Федоровна',
                'photo' => 'specialists/bokareva_anastasia.webp',
                'slug' => Str::slug('Бокарева Анастасия Федоровна'),
                'position' => 'врач-стоматолог общей практики',
                'description' => '',
                'sort_order' => 50,
                'certificates' => json_encode(['specialists/bokareva_anastasia_1.jpg']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fio' => 'Задорожная Наталья Викторовна',
                'photo' => 'specialists/zadoroznaya.webp',
                'slug' => Str::slug('Задорожная Наталья Викторовна'),
                'position' => 'врач-стоматолог терапевт',
                'description' => '',
                'sort_order' => 60,
                'certificates' => json_encode(['specialists/zadorozgnaya_1.png']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fio' => 'Чеботаев Владислав Юрьевич',
                'photo' => 'specialists/chebotaev.webp',
                'slug' => Str::slug('Чеботаев Владислав Юрьевич'),
                'position' => 'врач-стоматолог-ортопед',
                'description' => '',
                'sort_order' => 70,
                'certificates' => json_encode(['specialists/chebotaev_1.png']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fio' => 'Власова Елена Владимировна',
                'photo' => 'specialists/vlasova.webp',
                'slug' => Str::slug('Власова Елена Владимировна'),
                'position' => 'управляющий клиники',
                'description' => '',
                'sort_order' => 80,
                'certificates' => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fio' => 'Бокарев Артур Федорович',
                'photo' => 'specialists/bokarev_artur.webp',
                'slug' => Str::slug('Бокарев Артур Федорович'),
                'position' => 'заведующий зуботехнической лаборатории',
                'description' => '',
                'sort_order' => 90,
                'certificates' => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fio' => 'Леонова Юлия',
                'photo' => 'specialists/leonova.webp',
                'slug' => Str::slug('Леонова Юлия'),
                'position' => 'администратор',
                'description' => '',
                'sort_order' => 100,
                'certificates' => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fio' => 'Тупалов Тимур',
                'photo' => 'specialists/tupalov.webp',
                'slug' => Str::slug('Тупалов Тимур'),
                'position' => 'зубной техник',
                'description' => '',
                'sort_order' => 110,
                'certificates' => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fio' => 'Щербина Татьяна',
                'photo' => 'specialists/sherbina.webp',
                'slug' => Str::slug('Щербина Татьяна'),
                'position' => 'рентгенолаборант',
                'description' => '',
                'sort_order' => 120,
                'certificates' => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fio' => 'Канищева Виктория',
                'photo' => 'specialists/kanisheeva.webp',
                'slug' => Str::slug('Канищева Виктория'),
                'position' => 'медицинская сестра',
                'description' => '',
                'sort_order' => 130,
                'certificates' => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fio' => 'Алунтьева Наталья',
                'photo' => 'specialists/aluntieva.webp',
                'slug' => Str::slug('Алунтьева Наталья'),
                'position' => 'медицинская сестра',
                'description' => '',
                'sort_order' => 140,
                'certificates' => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fio' => 'Исаева Елизавета',
                'photo' => 'specialists/isaeva.webp',
                'slug' => Str::slug('Исаева Елизавета'),
                'position' => 'медицинская сестра',
                'description' => '',
                'sort_order' => 150,
                'certificates' => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
