<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // Tạo roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'ranger']);
        Role::create(['name' => 'editor']);
        Role::create(['name' => 'user']);

        // Tạo user với role admin
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
        $adminRole = Role::findByName('admin');
        $admin->assignRole($adminRole);

        // Tạo user với role ranger
        $ranger = User::create([
            'name' => 'Ranger User',
            'email' => 'ranger@example.com',
            'password' => Hash::make('password'),
        ]);
        $rangerRole = Role::findByName('ranger');
        $ranger->assignRole($rangerRole);

        // Tạo user với role editor
        $editor = User::create([
            'name' => 'Editor User',
            'email' => 'editor@example.com',
            'password' => Hash::make('password'),
        ]);
        $editorRole = Role::findByName('editor');
        $editor->assignRole($editorRole);

        // Tạo user với role user
        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
        ]);
        $userRole = Role::findByName('user');
        $user->assignRole($userRole);
    }
}