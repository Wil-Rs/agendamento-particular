<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendamentos')->insert([
            'data_consulta' => '2021-11-25',
            'hora_consulta' => '15:30:00',
            'user_id' => 1,
            'paciente_id' => 1
        ]);
    }
}
