<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super_Administrator']);
        Role::create(['name' => 'Administrator']);
        Role::create(['name' => 'Doctor']);
        Role::create(['name' => 'Nurse']);
    }
}
