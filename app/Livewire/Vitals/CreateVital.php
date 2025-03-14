<?php

namespace App\Livewire\Vitals;

use App\Models\Vital;
use App\Models\Patient;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class CreateVital extends Component
{
    public $patient;

    public string $temperature = '';

    public string $pulse = '';

    public string $blood_pressure = '';

    public string $respiratory_rate = '';

    public function mount(Patient $patient)
    {
        $this->patient = $patient;
    }

    public function createVital(): void
    {
        $validated = $this->validate([
            'temperature' => ['required','string', 'max:255'],
            'pulse' => ['required','string', 'max:255'],
            'blood_pressure' => ['required','string', 'max:255'],
            'respiratory_rate' => ['string', 'max:255'],
        ]);

        $validated['patient_id'] = $this->patient->id;

        Vital::create($validated);
        
        Session::flash('success_message', 'Patient vitals added successfully!');

        $this->redirectRoute('patient.show', $this->patient, absolute: false, navigate: true);
    }

    public function render()
    {
        return view('livewire.vitals.create-vital');
    }
}
