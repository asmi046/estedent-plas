<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ParametrSeeder::class,
            ControlOrganizationSeeder::class,
            ContactSeeder::class,
            MenuSeeder::class,
            PageSeeder::class,
            SeoDataSeeder::class,
            SpecialistSeeder::class,
            ServiceSeeder::class,
            AdvantageSeeder::class,
            BannerSeeder::class,
            PriceSeederTerapy::class,
            PriceSeederHir::class,
            PriceSeederOrto::class,
            PriceSeederRengen::class,

        ]);

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
