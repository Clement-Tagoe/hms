<?php

namespace Database\Seeders;

use App\Models\Treatment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Treatment::create([
            "patient_id" => 4,
            "user_id" => 3,
            "diagnosis" => "Acute Bronchitis",
            "medication" => "Amoxicillin 500mg PO TID x 7 days, Albuterol inhaler PRN",
            "administrative_notes" => "Patient advised to increase fluid intake.",
            "review_notes" => "Patient responded well to antibiotics. Cough improving."
        ]);

        Treatment::create([
            "patient_id" => 4,
            "user_id" => 4,
            "diagnosis" => "Hypertension",
            "medication" => "Lisinopril 10mg PO QD",
            "administrative_notes" => "Scheduled follow-up appointment in 2 weeks.",
            "review_notes" => "Blood pressure remains elevated.  Discussed lifestyle changes."
        ]);

        Treatment::create([
            "patient_id" => 6,
            "user_id" => 7,
            "diagnosis" => "Type 2 Diabetes Mellitus",
            "medication" => "Metformin 500mg PO BID, Glipizide 5mg PO QD",
            "administrative_notes" => "Referral to dietician.",
            "review_notes" => "Blood glucose levels being monitored."
        ]);

        Treatment::create([
            "patient_id" => 9,
            "user_id" => 6,
            "diagnosis" => "Osteoarthritis (Knee)",
            "medication" => "Ibuprofen 600mg PO TID PRN",
            "administrative_notes" => "Physical therapy referral.",
            "review_notes" => "Pain management plan discussed with patient."
        ]);

        Treatment::create([
           "patient_id" => 10,
            "user_id" => 5,
            "diagnosis" => "Major Depressive Disorder",
            "medication" => "Sertraline 50mg PO QD",
            "administrative_notes" => "Scheduled follow-up with psychiatrist.",
            "review_notes" => "Patient started on medication. Monitoring for side effects."
        ]);

        Treatment::create([
            "patient_id" => 2,
            "user_id" => 6,
            "diagnosis" => "Urinary Tract Infection",
            "medication" => "Ciprofloxacin 500mg PO BID x 7 days",
            "administrative_notes" => "Urine culture sent.",
            "review_notes" => "Patient started on antibiotics. Monitoring for improvement."
        ]);

        Treatment::create([
            "patient_id" => 4,
            "user_id" => 4,
            "diagnosis" => "Atrial Fibrillation",
            "medication" => "Metoprolol 50mg PO BID, Warfarin 5mg PO QD",
            "administrative_notes" => "INR monitoring scheduled.",
            "review_notes" => "Cardiac consultation recommended."
        ]);


        Treatment::create([
            "patient_id" => 3,
            "user_id" => 3,
            "diagnosis" => "Migraine Headache",
            "medication" => "Sumatriptan 50mg PO PRN",
            "administrative_notes" => "Patient education on migraine triggers.",
            "review_notes" => "Discussed prophylactic treatment options."
        ]);


        Treatment::create([
            "patient_id" => 12,
            "user_id" => 5,
            "diagnosis" => "Gastroesophageal Reflux Disease (GERD)",
            "medication" => "Omeprazole 20mg PO QD",
            "administrative_notes" => "Lifestyle modifications discussed.",
            "review_notes" => "Patient advised to avoid trigger foods."
        ]);


        Treatment::create([
            "patient_id" => 11,
            "user_id" => 6,
            "diagnosis" => "Asthma",
            "medication" => "Albuterol inhaler PRN, Fluticasone inhaler BID",
            "administrative_notes" => "Patient education on inhaler use.",
            "review_notes" => "Asthma action plan reviewed."
        ]);


        Treatment::create([
            "patient_id" => 3,
            "user_id" => 7,
            "diagnosis" => "Pneumonia",
            "medication" => "Azithromycin 500mg PO QD x 3 days",
            "administrative_notes" => "Chest X-ray ordered.",
            "review_notes" => "Patient started on antibiotics. Monitoring respiratory status."
        ]);
    }
}
