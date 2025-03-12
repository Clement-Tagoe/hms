<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::create([
            "medical_record_number" => "CHR12345",
            "full_name" => "John Smith",
            "email" => "johnsmith@gmail.com",
            "gender" => "Male",
            "contact" => "555-123-4567",
            "blood_type" => "O+",
            "allergies" => "Penicillin",
            "insurance_provider" => "Aetna",
            "insurance_number" => "A1234567",
            "emergency_contact_name" => "Jane Smith",
            "emergency_contact_number" => "555-987-6543"
        ]);

        Patient::create([
            "medical_record_number" => "CHR67890",
            "full_name" => "Alice Johnson",
            "email" => "alicejohnson@gmail.com",
            "gender" => "Female",
            "contact" => "555-555-5555",
            "blood_type" => "A-",
            "allergies" => "None",
            "insurance_provider" => "Blue Cross",
            "insurance_number" => "B9876543",
            "emergency_contact_name" => "Bob Johnson",
            "emergency_contact_number" => "555-111-2222"
        ]);

        Patient::create([
            "medical_record_number" => "CHR11223",
            "full_name" => "David Lee",
            "email" => "davidlee@gmail.com",
            "gender" => "Male",
            "contact" => "555-101-1122",
            "blood_type" => "AB+",
            "allergies" => "Pollen",
            "insurance_provider" => "Cigna",
            "insurance_number" => "C4567890",
            "emergency_contact_name" => "Sarah Lee",
            "emergency_contact_number" => "555-333-4444"
        ]);

        Patient::create([
            "medical_record_number" => "CHR44556",
            "full_name" => "Emily Davis",
            "email" => "emilydavis@gmail.com",
            "gender" => "Female",
            "contact" => "555-223-3445",
            "blood_type" => "O-",
            "allergies" => "Peanuts",
            "insurance_provider" => "UnitedHealthcare",
            "insurance_number" => "U0987654",
            "emergency_contact_name" => "Michael Davis",
            "emergency_contact_number" => "555-555-6666"
        ]);

        Patient::create([
            "medical_record_number" => "CHR77889",
            "full_name" => "Michael Brown",
            "email" => "michaelbrown@gmail.com",
            "gender" => "Male",
            "contact" => "555-334-4556",
            "blood_type" => "B+",
            "allergies" => "Dust",
            "insurance_provider" => "Kaiser Permanente",
            "insurance_number" => "K6543210",
            "emergency_contact_name" => "Jessica Brown",
            "emergency_contact_number" => "555-777-8888"
        ]);

        Patient::create([
            "medical_record_number" => "CHR23456",
            "full_name" => "Ashley Wilson",
            "email" => "ashleywilson@gmail.com",
            "gender" => "Female",
            "contact" => "555-445-5667",
            "blood_type" => "A+",
            "allergies" => "Cats",
            "insurance_provider" => "Anthem",
            "insurance_number" => "AN987654",
            "emergency_contact_name" => "Christopher Wilson",
            "emergency_contact_number" => "555-999-0000"
        ]);

        Patient::create([
            "medical_record_number" => "CHR89012",
            "full_name" => "Christopher Garcia",
            "email" => "christophergarcia@gmail.com",
            "gender" => "Male",
            "contact" => "555-556-6778",
            "blood_type" => "AB-",
            "allergies" => "Soy",
            "insurance_provider" => "Humana",
            "insurance_number" => "H1234789",
            "emergency_contact_name" => "Maria Garcia",
            "emergency_contact_number" => "555-222-3333"
        ]);

        Patient::create([
            "medical_record_number" => "CHR34567",
            "full_name" => "Brittany Rodriguez",
            "email" => "brittrodriguez@gmail.com",
            "gender" => "Female",
            "contact" => "555-667-7889",
            "blood_type" => "O+",
            "allergies" => "Latex",
            "insurance_provider" => "Molina Healthcare",
            "insurance_number" => "M8765432",
            "emergency_contact_name" => "Jose Rodriguez",
            "emergency_contact_number" => "555-444-5555"
        ]);

        Patient::create([
            "medical_record_number" => "CHR90123",
            "full_name" => "Kevin Martinez",
            "email" => "kevinmartinez@gmail.com",
            "gender" => "Male",
            "contact" => "555-778-8990",
            "blood_type" => "B-",
            "allergies" => "Dogs",
            "insurance_provider" => "Centene",
            "insurance_number" => "CE543210",
            "emergency_contact_name" => "Linda Martinez",
            "emergency_contact_number" => "555-666-7777"
        ]);

        Patient::create([
            "medical_record_number" => "CHR45678",
            "full_name" => "Angela Anderson",
            "email" => "angelaanderson@gmail.com",
            "gender" => "Female",
            "contact" => "555-889-9001",
            "blood_type" => "A-",
            "allergies" => "Shellfish",
            "insurance_provider" => "WellCare",
            "insurance_number" => "W2109876",
            "emergency_contact_name" => "Thomas Anderson",
            "emergency_contact_number" => "555-888-9999"
        ]);

        Patient::create([
            "medical_record_number" => "CHR01234",
            "full_name" => "Brian Taylor",
            "email" => "briantaylor@gmail.com",
            "gender" => "Male",
            "contact" => "555-990-0112",
            "blood_type" => "AB+",
            "allergies" => "Grass",
            "insurance_provider" => "Amerigroup",
            "insurance_number" => "AG765432",
            "emergency_contact_name" => "Susan Taylor",
            "emergency_contact_number" => "555-000-1111"
        ]);

        Patient::create([
            "medical_record_number" => "CHR56789",
            "full_name" => "Stephanie Thomas",
            "email" => "stephaniethomas@gmail.com",
            "gender" => "Female",
            "contact" => "555-001-1223",
            "blood_type" => "O-",
            "allergies" => "Mold",
            "insurance_provider" => "Health Net",
            "insurance_number" => "HN432109",
            "emergency_contact_name" => "Richard Thomas",
            "emergency_contact_number" => "555-121-2323"
        ]);
    }
}
