<?php

use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('professions')->truncate();


       Profession::create([

        'title'=>'Jefe de Operaciones Tecnologicas',
       ]);

       Profession::create([

        'title'=>'Jefe de Desarrollo WEB',
       ]);

    }
}
