<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Получаем список файлов из папки tmp_data/clinic_cert
        $sourceDir = public_path('tmp_data/clinic_cert');
        $files = glob($sourceDir.'/*.{jpg,jpeg,png,gif,webp,pdf}', GLOB_BRACE);

        // Сортируем файлы по имени
        sort($files);

        $certificates = [];

        foreach ($files as $index => $filePath) {
            $fileName = basename($filePath);
            $number = $index + 1;

            // Копируем файл в хранилище
            $storagePath = "clinic_cert/{$fileName}";
            Storage::disk('public')->put($storagePath, file_get_contents($filePath), 'public');

            // Добавляем запись в массив для вставки
            $certificates[] = [
                'name' => "Сертификат №{$number}",
                'sort_order' => $number,
                'file' => $storagePath,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Вставляем все записи в базу данных
        if (! empty($certificates)) {
            DB::table('certificates')->insert($certificates);
        }
    }
}
