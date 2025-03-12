<?php

namespace App\Livewire\Patients;

use App\Models\Patient;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class CreatePatient extends Component
{
    public string $medical_record_number;

    public string $full_name = '';

    public $date_of_birth = '';

    public string $email = '';

    public string $gender = '';

    public string $contact = '';

    public string $blood_type = '';

    public string $allergies = '';

    public string $insurance_provider = '';

    public string $insurance_number = '';

    public string $emergency_contact_name = '';

    public string $emergency_contact_number = '';

    public function mount()
    {
        // Generate the medical record number when the component loads
        $this->generateMedicalRecordNumber();
    }

    public function generateMedicalRecordNumber()
    {
        // Get the latest patient record to determine the next number
        $latestPatient = Patient::latest('id')->first();

        // If no patients exist, start with 1, else increment the last number
        $number = $latestPatient ? (int)substr($latestPatient->medical_record_number, 3) + 1 : 1;

        // Format the number with leading zeros (7 digits total after CHR)
        $formattedNumber = str_pad($number, 6, '0', STR_PAD_LEFT);

        // Combine prefix and number
        $this->medical_record_number = 'CHR' . $formattedNumber;
    }

    
    public function createPatient(): void
    {
        $validated = $this->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Patient::class],
            'gender' => ['required', 'string'],
            'contact' => ['required', 'string'],
            'blood_type' => ['string'],
            'allergies' => ['string'],
            'insurance_provider' => ['string'],
            'insurance_number' => ['string'],
            'emergency_contact_name' => ['string'],
            'emergency_contact_number' => ['string'],
        ]);

        $validated['medical_record_number'] = $this->medical_record_number;

        Patient::create($validated);
        
        Session::flash('success_message', 'Patient created successfully!');

        $this->redirectRoute('patients.index', absolute: false, navigate: true);
    }

    public function render()
    {
        return view('livewire.patients.create-patient');
    }
}
