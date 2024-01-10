<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamiliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('families')->insert([
                'ho_vn' => 'Ho VN ' . $i,
                'ho_latin' => 'Ho Latin ' . $i,
                'description' => 'Mô tả cho Ho ' . $i,
                'slug' => Str::slug('ho_vn ' . $i),
                'phylum_id' => rand(1, 4),  // Sử dụng hàm rand để lấy giá trị ngẫu nhiên từ 1-9
                'classes_id' => rand(3, 12),
                'order_id' => rand(1, 10),
                'status' => 'active',  // Hoặc 'inactive' tùy thuộc vào yêu cầu của bạn
            ]);
        }
    }
}
