<?php

use Illuminate\Database\Seeder;

class TelefoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //FABRICA PARA SE CRIAR OS REGISTROS NA TABELA
        factory(\CodeAgenda\Entities\Telefone::class, 80 )->create();
    }
}
