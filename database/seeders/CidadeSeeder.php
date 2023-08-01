<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cidades')->truncate();
        DB::table('cidades')->insert(array (
            0 => array (
                'nome' => 'Florianópolis',
                'estado' => 'SC',
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
            1 => array (
                'nome' => 'Bal. Camboriú',
                'estado' => 'SC',
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
            2 => array (
                'nome' => 'Porto Alegre',
                'estado' => 'RS',
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
            3 => array (
                'nome' => 'Bento Gonçalves',
                'estado' => 'RS',
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
            4 => array (
                'nome' => 'São Paulo',
                'estado' => 'SP',
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
            5 => array (
                'nome' => 'Rio de Janeiro',
                'estado' => 'RJ',
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
            6 => array (
                'nome' => 'Salvador',
                'estado' => 'BA',
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
            7 => array (
                'nome' => 'Ilhéus',
                'estado' => 'BA',
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
            8 => array (
                'nome' => 'Sorocaba',
                'estado' => 'SP',
                'created_at' => Carbon::now()->format('Y-m-d H:m:s'),
            ),
        ));
    }
}
