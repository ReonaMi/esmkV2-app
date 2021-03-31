<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'superadmin',
            'guard_name' => 'pengelola'
        ]);

        Role::create([
            'name' => 'admin',
            'guard_name' => 'pengelola'
        ]);

        Role::create([
            'name' => 'kesiswaan',
            'guard_name' => 'pengelola'
        ]);

        Role::create([
            'name' => 'toolman',
            'guard_name' => 'pengelola'
        ]);
    }
}
