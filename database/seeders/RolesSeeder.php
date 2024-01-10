<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RolesSeeder extends Seeder
{
    public function run()
    {
        // Tạo roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'ranger']);
        Role::create(['name' => 'editor']);
        Role::create(['name' => 'user']);
    }
}