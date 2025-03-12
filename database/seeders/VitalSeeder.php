<?php

namespace Database\Seeders;

use App\Models\Vital;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vital::create([
            'patient_id' => 1,
            'temperature' => '36.8°C',
            'pulse' => '72 bpm',
            'blood_pressure' => '120/80 mmHg',
            'respiratory_rate' => '16 breaths/min'
        ]);

        Vital::create([
            'patient_id' => 1,
            'temperature' => '37.2°C',
            'pulse' => '88 bpm',
            'blood_pressure' => '130/85 mmHg',
            'respiratory_rate' => '18 breaths/min',
        ]);


        Vital::create([
            'patient_id' => 2,
            'temperature' => '38.1°C',
            'pulse' => '96 bpm',
            'blood_pressure' => '115/75 mmHg',
            'respiratory_rate' => '20 breaths/min'
        ]);


        Vital::create([
            'patient_id' => 2,
            'temperature' => '36.5°C',
            'pulse' => '64 bpm',
            'blood_pressure' => '110/70 mmHg',
            'respiratory_rate' => '14 breaths/min',
        ]);

        Vital::create([
            'patient_id' => 2,
            'temperature' => '37.0°C',
            'pulse' => '80 bpm',
            'blood_pressure' => '125/82 mmHg',
            'respiratory_rate' => '17 breaths/min'
        ]);
    }
}
