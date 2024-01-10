<?php

namespace Database\Seeders;
use App\Models\Genus;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Genus::create([
                'chi_vn' => $faker->word,
                'chi_latin' => $faker->word,
                'description' => $faker->paragraph,
                'slug' => $faker->slug,
                'status' => $faker->randomElement(['active', 'inactive']),
                'family_id' => rand(1, 10),
                'order_id' => rand(1, 10),
                'classes_id' => rand(3, 12),
                'phylum_id' => rand(1, 4),
            ]);
        }
    }
}
