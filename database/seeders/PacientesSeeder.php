<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            'name' => 'Apolo o doguinho',
            'cpf' => '12345678910',
            'idade' => 4,
            'altura' => 0.30,
            'peso' => 4,
            'user_id' => 1
        ]);
    }
}
