<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'is_admin'  => 1,
            'active'  => 1
        ])->create();

        User::factory([
            'name' => 'Juan',
            'email' => 'juan@dominio.com',
            'password' => bcrypt('123456'),
            'is_admin'  => 0,
            'active'  => 1
        ])->create();
    }
}
