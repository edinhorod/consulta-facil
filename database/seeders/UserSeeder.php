<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
use Carbon\Carbon;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Chistian',
            'email' => 'christian.ramires@example.com',
            'password' => Hash::make('password'),
            'created_at'=> Carbon::now()->format('Y-m-d H:m:s'),
            'updated_at'=> Carbon::now()->format('Y-m-d H:m:s'),
        ]);
    }
}
