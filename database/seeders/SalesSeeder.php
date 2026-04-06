<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title = '🔥 Акция апреля! Заботьтесь о своей улыбке вместе с нами! 🦷';
        $storagePath = 'sale/sale_1.webp';

        DB::table('sales')->delete();

        Storage::disk('public')->put(
            $storagePath,
            file_get_contents(public_path('tmp_data/sale/sale_1.webp')),
            'public'
        );

        DB::table('sales')->insert([
            'title' => $title,
            'slug' => Str::slug($title),
            'img' => $storagePath,
            'description' => <<<'HTML'
<p>🦷 Бесплатная консультация стоматолога-терапевта по средам, пятницам и субботам по адресу ул. 1-я Пушкарная, д. 21 - предварительная запись обязательна!</p>
<p>И это ещё не всё: для новых пациентов при первом посещении — рентген зуба в подарок! Запишитесь на лечение зуба в течение месяца после консультации, и рентген будет при вас совершенно бесплатно!</p>
<p>Почему стоит выбрать нашу клинику?</p>
<ul>
    <li>Профессиональные врачи</li>
    <li>Современное оборудование</li>
    <li>Индивидуальный подход</li>
</ul>
<p>Ждём вас, чтобы сделать вашу улыбку ещё ярче! 😄✨</p>
<p>📍 Курск, ул. 1-я Пушкарная, 21<br>📲 8 (4712) 78-77-70</p>
<p>Пост носит информационный характер и не заменит профессиональную консультацию.</p>
HTML,
            'short_description' => 'Бесплатная консультация стоматолога-терапевта по средам, пятницам и субботам. Запишись на лечение после консультации и получи рентген зуба в подарок.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
