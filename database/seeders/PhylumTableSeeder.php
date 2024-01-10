<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Phylum;

class PhylumTableSeeder extends Seeder
{
    public function run()
    {
        Phylum::create([
            'nganh_vn' => 'Có xương sống',
            'nganh_latin' => 'Vertebrata',
            'description' => 'những loài với xương sống hoặc cột sống. Khoảng 57.739 loài động vật có xương sống đã được miêu tả.',
            'slug' => 'co-xuong-song',
            'status' => 'active',
        ]);

        Phylum::create([
            'nganh_vn' => 'Thân mềm',
            'nganh_latin' => 'Mollusca',
            'description' => 'cơ thể mềm, có thể có vỏ đá vôi che chở và nâng đỡ, tùy lối sống mà vỏ và cấu tạo cơ thể có thể thay đổi',
            'slug' => 'than-mem',
            'status' => 'active',
        ]);
        Phylum::create([
            'nganh_vn' => 'Thông đất',
            'nganh_latin' => 'Lycopodiophyta',
            'description' => 'cơ thể mềm, có thể có vỏ đá vôi che chở và nâng đỡ, tùy lối sống mà vỏ và cấu tạo cơ thể có thể thay đổi',
            'slug' => 'thong-dat',
            'status' => 'active',
        ]);
        Phylum::create([
            'nganh_vn' => 'Quyết lá thông',
            'nganh_latin' => 'Psilotophyta',
            'description' => 'Bụi nhỏ, thường ở đất, không lông, không rễ, có căn trạng thay thế',
            'slug' => 'quyetlathong',
            'status' => 'active',
        ]);

        // Thêm các bản ghi khác nếu cần
    }
}
