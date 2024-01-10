<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classes;
class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Classes::create([
                'lop_vn' => 'Lớp VN ' . $i,
                'lop_latin' => 'Lớp Latin ' . $i,
                'description' => 'Mô tả cho Lớp ' . $i,
                'phylum_id' => random_int(1, 4), // Giả sử có 5 ngành, thay đổi tùy theo số ngành thực tế
                'status' => 'active', // Hoặc 'inactive' tùy thuộc vào yêu cầu
                'slug' => 'lop-vn-' . $i, // Tùy thuộc vào cách bạn muốn tạo slug
            ]);
        }
    }
}
