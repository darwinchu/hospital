<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patients.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = Patient::store($request);

        return response()->json([
            'message' => 'Success on creating a patient',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        $item = Patient::withTrashed()->findOrFail($id);

        return view('patients.show', [
            'item' => $item,
        ]);
    }

    public function print($id = null)
    {
        $item = Patient::withTrashed()->findOrFail($id);

        return view('patients.print', [
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Patient::withTrashed()->findOrFail($id);
        $item = Patient::store($request, $item);

        return response()->json([
            'message' => 'Success on updating a patient',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = null)
    {
        $item = Patient::withTrashed()->findOrFail($id);
        $item->delete();

        return response()->json([
            'message' => 'Success on deleting a patient',
        ]);
    }
}
