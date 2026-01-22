<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SeoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'url' => '/',
                'seo_title' => 'Стоматологическая клиника в Курске',
                'seo_description' => 'Стоматологическая клиника Эстедент Плюс в городе Курск. Все виды стоматологических услуг',
                'page_title' => '',
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],
            [
                'url' => 'contacts',
                'seo_title' => 'Контакты стоматологической клиники - Эстедент Плюс',
                'seo_description' => 'Свяжитесь с нами любым удобным способом. Вы получите подрбную консультацию и сможете записаться на прием',
                'page_title' => '',
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],
            [
                'url' => 'about',
                'seo_title' => 'О нашей стоматологической клинике',
                'seo_description' => 'Узнайте больше о нашей клинике, наших ценностях и команде профессионалов, которые заботятся о вашем здоровье',
                'page_title' => '',
            ],

            [
                'url' => 'prices',
                'seo_title' => 'Цены на стоматологические услуги в Курске',
                'seo_description' => 'Ознакомьтесь с нашим прайс-листом на стоматологические услуги. Качественная стоматология по доступным ценам',
                'page_title' => '',
            ],

            [
                'url' => 'specialists',
                'seo_title' => 'Наши специалисты - опытные стоматологи',
                'seo_description' => 'Познакомьтесь с нашей командой высококвалифицированных стоматологов, готовых обеспечить вам лучший уход за зубами',
                'page_title' => '',
            ],

            [
                'url' => 'page/politika-v-oblasti-obrabotki-personalnyx-dannyx',
                'seo_title' => 'Политика в области обработки персональных данных',
                'seo_description' => 'Политика в области обработки персональных данных',
                'page_title' => '',
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],
            [
                'url' => 'page/soglasie-na-obrabotku-personalnyx-dannyx',
                'seo_title' => 'Согласие на обработку персональных данных',
                'seo_description' => 'Согласие на обработку персональных данных',
                'page_title' => '',
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],
            [
                'url' => 'page/o-failax-cookie',
                'seo_title' => 'Подробнее о файлах cookie',
                'seo_description' => 'Подробнее о файлах cookie',
                'page_title' => '',
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],
            [
                'url' => '/legal_documents',
                'seo_title' => 'Правовая информация',
                'seo_description' => 'Правовая информация',
                'page_title' => '',
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],
        ];

        DB::table('seo_data')->insert($data);
    }
}
