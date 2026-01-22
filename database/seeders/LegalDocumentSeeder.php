<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LegalDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sourcePath = public_path('tmp_data/documents');

        $documents = [
            // Documents with files
            [
                'name' => 'СВИДЕТЕЛЬСТВО О ГОСУДАРСТВЕННОЙ РЕГИСТРАЦИИ ЮРИДИЧЕСКОГО ЛИЦА',
                'file' => 'svidetelstvo_ul.pdf',
                'order' => 1,
            ],
            [
                'name' => 'СВИДЕТЕЛЬСТВО О ПОСТАНОВКЕ НА УЧЕТ В НАЛОГОВОМ ОРГАНЕ',
                'file' => 'svidetelstvo_ogrn.pdf',
                'order' => 2,
            ],
            [
                'name' => 'САНИТАРНО-ЭПИДЕМИОЛОГИЧЕСКОЕ ЗАКЛЮЧЕНИЕ',
                'file' => 'san_epid_zak.pdf',
                'order' => 3,
            ],
            [
                'name' => 'ВЫПИСКА ИЗ РЕЕСТРА ЛИЦЕНЗИЙ',
                'file' => 'licenzia.pdf',
                'order' => 4,
            ],
            [
                'name' => 'ДОГОВОР НА ОКАЗАНИЕ ПЛАТНЫХ МЕДИЦИНСКИХ УСЛУГ',
                'file' => 'dogovor_platnye_uslugi.pdf',
                'order' => 5,
            ],
            [
                'name' => 'ИНФОРМАЦИОННОЕ ДОБРОВОЛЬНОЕ СОГЛАСИЕ НА ОКАЗАНИЕ ПЛАТНЫХ МЕДИЦИНСКИХ УСЛУГ С ПРИМЕНЕНИЕМ ДЕНТАЛЬНЫХ ИМПЛАНТОВ',
                'file' => 'soglasie_implanty.pdf',
                'order' => 6,
            ],
            [
                'name' => 'ИНФОРМИРОВАННОЕ ДОБРОВОЛЬНОЕ СОГЛАСИЕ ПАЦИЕНТА НА ОРТОПЕДИЧЕСКОЕ ЛЕЧЕНИЕ',
                'file' => 'soglasie_orto.pdf',
                'order' => 7,
            ],
            [
                'name' => 'ИНФОРМИРОВАННОЕ ДОБРОВОЛЬНОЕ СОГЛАСИЕ НА МЕДИЦИНСКОЕ ВМЕШАТЕЛЬСТВО',
                'file' => 'soglasie_vmeshatelstvo.pdf',
                'order' => 8,
            ],
            [
                'name' => 'ПРАВИЛА ПОВЕДЕНИЯ ПАЦИЕНТА В МЕДИЦИНСКОЙ ОРГАНИЗАЦИИ',
                'file' => 'pravila_povedenia_v_med_org.pdf',
                'order' => 9,
            ],
            // Documents with external links
            [
                'name' => 'ПОРЯДОК ПРЕДОСТАВЛЕНИЯ ПЛАТНЫХ УСЛУГ',
                'link' => 'https://e-stomatology.ru/info/256/',
                'order' => 10,
            ],
            [
                'name' => 'ПОРЯДОК ОКАЗАНИЯ МЕДИЦИНСКОЙ ПОМОЩИ ВЗРОСЛОМУ НАСЕЛЕНИЮ ПРИ СТОМАТОЛОГИЧЕСКИХ ИХ ЗАБОЛЕВАНИЯХ» (УТВЕРЖДЕН ПРИКАЗОМ МИНИСТЕРСТВА ЗДРАВООХРАНЕНИЯ РФ ОТ 31.07.2020 Г. №786',
                'link' => 'https://e-stomatology.ru/info/21/',
                'order' => 11,
            ],
            [
                'name' => 'АКТУАЛЬНЫЕ КЛИНИЧЕСКИЕ РЕКОМЕНДАЦИИ СТОМАТОЛОГИЧЕСКОЙ АССОЦИАЦИИ РОССИИ',
                'link' => 'https://e-stomatology.ru/director/protokols/',
                'order' => 12,
            ],
            [
                'name' => 'ПРАВА ГРАЖДАН ЗАКРЕПЛЕНЫ ГЛАВОЙ 4 ФЕДЕРАЛЬНОГО ЗАКОНА ОТ 21.11.2011 Г. №323-ФЗ «ОБ ОСНОВАХ ОХРАНЫ ЗДОРОВЬЯ ГРАЖДАН В РФ (СТ.18-27)',
                'link' => 'https://base.garant.ru/12191967/39508de81c29ab8e2f1ebbd63918d25c/',
                'order' => 13,
            ],
            [
                'name' => 'ТЕРРИТОРИАЛЬНАЯ ПРОГРАММА ГОСУДАРСТВЕННЫХ ГАРАНТИЙ БЕСПЛАТНОГО ОКАЗАНИЯ МЕДИЦИНСКОЙ ПОМОЩИ» ОТ 26.12.2024 Г. №1199-ПП.',
                'link' => 'http://publication.pravo.gov.ru/document/4600202412270003',
                'order' => 14,
            ],
            [
                'name' => 'РАСПОРЯЖЕНИЕ ПРАВИТЕЛЬСТВА РФ ОТ 12.10.2019 N 2406-Р "ОБ УТВЕРЖДЕНИИ ПЕРЕЧНЯ ЖИЗНЕННО НЕОБХОДИМЫХ ПРЕПАРАТОВ ДЛЯ МЕДИЦИНСКОГО ПРИМЕНЕНИЯ"',
                'link' => 'https://normativ.kontur.ru/document?moduleId=1&documentId=491464',
                'order' => 15,
            ],
        ];

        foreach ($documents as $document) {
            $filePath = $document['file'] ?? '';
            $fileLink = $document['link'] ?? '';

            // If it's a local file (not a URL), copy it to storage
            if (! empty($filePath)) {
                $sourceFile = $sourcePath.'/'.$filePath;
                Storage::disk('public')->put("legal_documents/$filePath", file_get_contents($sourceFile), 'public');
                // Store the storage path instead of full path
                $filePath = 'legal_documents/'.$filePath;
            }

            DB::table('legal_documents')->insert([
                'name' => $document['name'],
                'file' => $filePath,
                'link' => $fileLink,
                'order' => $document['order'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
