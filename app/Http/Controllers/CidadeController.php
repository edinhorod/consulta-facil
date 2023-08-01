<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\Cidade;
use App\Models\Medico;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = Cidade::all();
        if($cities){
            return response()->json(['success' => true, 'message' => count($cities) . ' cities found', 'cities' => $cities], 200);
        } else{
            return response()->json(['success' => false, 'message' => 'No cities found. Try again later.'], 200);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getDoctorsByCity($cidade_id)
    {
        $doctors = Medico::where('medicos.cidade_id', $cidade_id)
                        ->join('cidades', 'cidades.id', '=', 'medicos.cidade_id')
                        ->select('medicos.*', 
                        DB::raw("CONCAT(COALESCE(cidades.nome, ''),'/',COALESCE(cidades.estado,'')) as cidade"))
                        ->get();
        
        if($doctors){
            return response()->json(['success' => true, 'message' => count($doctors) . ' doctors found', 'doctors' => $doctors], 200);
        } else{
            return response()->json(['success' => false, 'message' => 'No doctors found. Try again later.'], 200);
        }
    }
}
