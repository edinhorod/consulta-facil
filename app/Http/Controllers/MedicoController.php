<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\Medico;
use App\Models\MedicoPaciente;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Medico::join('cidades', 'cidades.id', '=', 'medicos.cidade_id')
                        ->select('medicos.*',
                        DB::raw("CONCAT(COALESCE(cidades.nome, ''),'/',COALESCE(cidades.estado,'')) as cidade"))
                        ->get();
        if($doctors){
            return response()->json(['success' => true, 'message' => count($doctors) . ' doctors found', 'doctors' => $doctors], 200);
        } else{
            return response()->json(['success' => false, 'message' => 'No doctors found. Try again later.'], 200);
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
        $doctor = Medico::create($params);

        if($doctor){
            return response()->json(['success' => true, 'message' => 'Doctor create successfuly', 'doctor' => $doctor], 200);
        } else{
            return response()->json(['success' => false, 'message' => 'No doctors found. Try again later.'], 200);
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
        $doctor = Medico::find($id);
        if($doctor){
            $doctor->update($params);
            return response()->json(['success' => true, 'message' => 'Doctor update successfuly', 'doctor' => $doctor], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'No doctors found. Try again later.'], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function linkPatientDoctor(Request $request)
    {
        $params = $request->all();
        $doctor = MedicoPaciente::create($params);

        if($doctor){
            return response()->json(['success' => true, 'message' => 'Doctor create successfuly', 'doctor' => $doctor], 200);
        } else{
            return response()->json(['success' => false, 'message' => 'No doctors found. Try again later.'], 200);
        }


    }
    
    public function getPatientDoctor($medico_id)
    {
        $patients = MedicoPaciente::where('medico_id', $medico_id)
                                    ->join('medicos', 'medicos.id', '=', 'medico_pacientes.medico_id')
                                    ->join('pacientes', 'pacientes.id', '=', 'medico_pacientes.paciente_id')
                                    ->select('medicos.nome as medico_nome', 'pacientes.nome as paciente_nome')
                                    ->get();

        if($patients){
            return response()->json(['success' => true, 'message' => count($patients) . ' patients found', 'patients' => $patients], 200);
        } else{
            return response()->json(['success' => false, 'message' => 'No patients found. Try again later.'], 200);
        }
    }
}
