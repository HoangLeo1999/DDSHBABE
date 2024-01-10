<?php 
// Trong AccountSeeder.php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
class DatabaseSeeder extends Seeder
{
    public function run()
    { 
        
            // Tạo roles
            $this->call(RolesSeeder::class);
            $this->call(UsersSeeder::class);
        }
    

   
}
