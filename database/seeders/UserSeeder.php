<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
        ]);

        $admin->assignRole('Admin');

        $Tenant = User::create([
            'name' => 'Tenant',
            'email' => 'tenant@tenant.com',
            'password' => bcrypt('tenant123'),
        ]);

        $Tenant->assignRole('Tenant');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('user123'),
        ]);

        $user->assignRole('User');
    }
}
