<?php

namespace App\Livewire\Patients;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;

class PatientsIndex extends Component
{
    use WithPagination;
    
    public $search = '';

    protected $queryString = [
        'search',
    ];

    public function render()
    {
        return view('livewire.patients.patients-index', [
            'patients' => Patient::latest()
                ->when(strlen($this->search) >= 3, function ($query) {
                    return $query->where('full_name', 'like', '%' . $this->search . '%')
                                ->orWhere('medical_record_number', 'like', '%' . $this->search . '%');
                })
                ->paginate(10),
            'total_patients' => Patient::all()->count(),
        ]);
    }
}
