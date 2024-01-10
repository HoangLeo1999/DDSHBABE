<?php

namespace Database\Seeders;
use App\Models\Order;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {$faker = Faker::create();

        // Tạo 10 bản ghi trong bảng orders
        for ($i = 0; $i < 10; $i++) {
            $boVn = $faker->name; // Tên tiếng Việt
            Order::create([
                'bo_vn' => $boVn,
                'bo_latin' => $faker->word, // Tên Latin
                'description' => $faker->sentence,
                'status' => $faker->randomElement(['active', 'inactive']),
                'classes_id' => rand(3, 12),
                'phylum_id' => rand(1, 4),
                'slug' => Str::slug($boVn), // Tạo slug từ trường bo_vn
            ]);
        }
    }
}
