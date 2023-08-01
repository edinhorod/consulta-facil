<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicos')->truncate();
        DB::table('medicos')->insert(array (
            0 => array (
                'nome' => 'José da Silva',
                'especialidade' => 'Ginecologista',
                'cidade_id' => 8,
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
            1 => array (
                'nome' => 'João Silvério',
                'especialidade' => 'Clínico Geral',
                'cidade_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
            2 => array (
                'nome' => 'Carlos Andrade',
                'especialidade' => 'Urologista',
                'cidade_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
            3 => array (
                'nome' => 'Bento Gonçalves',
                'especialidade' => 'Pediatra',
                'cidade_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
            4 => array (
                'nome' => 'João Paulo',
                'especialidade' => 'Cardiologista',
                'cidade_id' => 4,
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
            5 => array (
                'nome' => 'Silvio de Abreu',
                'especialidade' => 'Oncologista',
                'cidade_id' => 5,
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
            6 => array (
                'nome' => 'Salvador Gregório',
                'especialidade' => 'Ginecologista',
                'cidade_id' => 6,
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
            7 => array (
                'nome' => 'Airton Carlos Souza',
                'especialidade' => 'Clínico Geral',
                'cidade_id' => 7,
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
        ));
    }
}
