<?php

namespace App\Livewire\Vitals;

use App\Models\Vital;
use App\Models\Patient;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class EditVital extends Component
{
    public $vital;

    public string $temperature = '';

    public string $pulse = '';

    public string $blood_pressure = '';

    public string $respiratory_rate = '';

    
    public function mount(Vital $latestVital)
    {
        $this->vital = $latestVital;
        $this->temperature = $latestVital->temperature;
        $this->pulse = $latestVital->pulse;
        $this->blood_pressure = $latestVital->blood_pressure;
        $this->respiratory_rate = $latestVital->respiratory_rate;
    }

    public function updateVital(): void
    {
        $validated = $this->validate([
            'temperature' => ['required','string', 'max:255'],
            'pulse' => ['required','string', 'max:255'],
            'blood_pressure' => ['required','string', 'max:255'],
            'respiratory_rate' => ['string', 'max:255'],
        ]);


        $this->vital->update($validated);
        
        Session::flash('success_message', 'Patient vitals updated successfully!');

        $this->redirectRoute('patient.show', $this->vital->patient, absolute: false, navigate: true);
    }

    public function render()
    {
        return view('livewire.vitals.edit-vital');
    }
}
