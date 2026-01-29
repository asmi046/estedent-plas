<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PriceSeederRengen extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prices')->insert([
            [
                'service_code' => 'А06.07.003',
                'service_name' => 'Прицельная внутриротовая рентгенография',
                'price' => 500,
                'section' => 'Рентгенология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А06.07.004',
                'service_name' => 'Ортопантомография',
                'price' => 1000,
                'section' => 'Рентгенология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А06.07.013',
                'service_name' => 'Компьютерная томография челюстно‑лицевой области',
                'price' => 2500,
                'section' => 'Рентгенология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А06.07.013.001',
                'service_name' => 'Компьютерная томография одной челюсти',
                'price' => 1500,
                'section' => 'Рентгенология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'А06.07.013.002',
                'service_name' => 'Компьютерная томография области одного зуба',
                'price' => 1000,
                'section' => 'Рентгенология',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
