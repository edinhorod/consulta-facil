<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Paciente::all();
        if($patients){
            return response()->json(['success' => true, 'message' => count($patients) . ' patients found', 'patients' => $patients], 200);
        } else{
            return response()->json(['success' => false, 'message' => 'No patients found. Try again later.'], 200);
        }
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
        $params = $request->all();
        $patient = Paciente::create($params);

        if($patient){
            return response()->json(['success' => true, 'message' => 'patient create successfuly', 'patient' => $patient], 200);
        } else{
            return response()->json(['success' => false, 'message' => 'No patient found. Try again later.'], 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $params = $request->all();
        $patient = Paciente::find($id);
        if($patient){
            $patient->update($params);
            return response()->json(['success' => true, 'message' => 'patient update successfuly', 'patient' => $patient], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'No patients found. Try again later.'], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
