<?php

namespace App\Livewire\Patients;

use App\Models\Patient;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class EditPatient extends Component
{
    public $patient;

    public string $full_name = '';

    public $date_of_birth = '';

    public string $email = '';

    public string $gender = '';

    public string $contact = '';

    public string $blood_type;

    public string $allergies = '';

    public string $insurance_provider = '';

    public string $insurance_number = '';

    public string $emergency_contact_name = '';

    public string $emergency_contact_number = '';


    public function mount(Patient $patient): void
    {
        $this->patient = $patient;
        $this->full_name = $patient->full_name;
        $this->date_of_birth = $patient->date_of_birth;
        $this->email = $patient->email;
        $this->gender = $patient->gender;
        $this->contact = $patient->contact;
        $this->blood_type = $patient->blood_type;
        $this->allergies = $patient->allergies;
        $this->insurance_provider = $patient->insurance_provider;
        $this->insurance_number = $patient->insurance_number;
        $this->emergency_contact_name = $patient->emergency_contact_name;
        $this->emergency_contact_number = $patient->emergency_contact_number;
    }

    public function updatePatientInformation():void
    {
        $validated = $this->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique('patients')->ignore($this->patient)],
            'gender' => ['required', 'string'],
            'contact' => ['required', 'string'],
            'blood_type' => ['string'],
            'allergies' => ['string'],
            'insurance_provider' => ['string'],
            'insurance_number' => ['string'],
            'emergency_contact_name' => ['string'],
            'emergency_contact_number' => ['string'],
        ]);

       $this->patient->update($validated);
       
       Session::flash('success_message', 'Patient Info updated successfully!');
       
       $this->redirectRoute('patient.show', $this->patient, absolute: false, navigate: true);
    }
    
    public function render()
    {
        return view('livewire.patients.edit-patient');
    }
}
