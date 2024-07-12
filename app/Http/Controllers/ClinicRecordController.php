<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClinicRecordRequest;
use App\Http\Requests\UpdateClinicRecordRequest;
use App\Models\ClinicRecord;
use App\Models\Employee;
use App\Models\Finding;

class ClinicRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::latest()->with('clinicRecords')->simplePaginate(20);
        $clinicRecords = ClinicRecord::all();
        $findings = Finding::all();
        $total = 0;
        // dd($employees);

        return view('clinic.index', [
            'employees' => $employees,
            'clinicRecords' => $clinicRecords,
            'findings' => $findings,
            'total' => $total,
        ]);

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
    public function store(StoreClinicRecordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ClinicRecord $clinicRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClinicRecord $clinicRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClinicRecordRequest $request, ClinicRecord $clinicRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClinicRecord $clinicRecord)
    {
        //
    }
}
