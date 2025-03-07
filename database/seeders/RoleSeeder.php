<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'admin',
                'guard_name' => 'web'
            ],
            [
                'name' => 'hr',
                'guard_name' => 'web'
            ],
            [
                'name' => 'employee',
                'guard_name' => 'web'
            ],
        ];
        if (Role::count() === 0) {
            Role::insert($roles);
        }
    }
}

