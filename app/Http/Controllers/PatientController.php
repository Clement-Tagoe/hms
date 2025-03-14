<?php

namespace App\Http\Controllers;

use App\Models\Vital;
use App\Models\Patient;
use App\Models\Treatment;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        $treatments = Treatment::with('user')->whereBelongsTo($patient)->latest();
        $vitals = Vital::whereBelongsTo($patient)->latest();

        return view('patients.show', [
            'patient' => $patient,
            'treatments' => $treatments->paginate(5),
            'vitals' => $vitals->paginate(5),
            'latestVital' => $patient->latestVital,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
