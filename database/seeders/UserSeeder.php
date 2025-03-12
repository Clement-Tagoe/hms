<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'role_id' => 1,
            'name' => 'Brian Mensah',
            'email' => 'brianmensah@gmail.com',
            'contact' => '0244987654',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Daniel Johnson',
            'email' => 'danieljohnson@gmail.com',
            'contact' => '0242564128',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'role_id' => 3,
            'name' => 'Dr. Carie Bell',
            'email' => 'cariebell@gmail.com',
            'contact' => '0204531781',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'role_id' => 3,
            'name' => 'Dr. Mike Tyson',
            'email' => 'miketyson@gmail.com',
            'contact' => '0245698712',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'role_id' => 3,
            'name' => 'Dr. Daniel Turkson',
            'email' => 'danielturkson@gmail.com',
            'contact' => '0261239547',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'role_id' => 3,
            'name' => 'Dr. Mariah Carey',
            'email' => 'mariahcarey@gmail.com',
            'contact' => '0244321965',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'role_id' => 3,
            'name' => 'Dr. Dwayne Johnson',
            'email' => 'dwaynejohnson@gmail.com',
            'contact' => '0249874123',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'role_id' => 4,
            'name' => 'Abigail Smith',
            'email' => 'abigailsmith@gmail.com',
            'contact' => '0249987322',
            'password' => bcrypt('12345678'),
        ]);
    }
}
