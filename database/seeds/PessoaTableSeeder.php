<?php

use Illuminate\Database\Seeder;

class PessoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //FABRICA PARA SE CRIAR OS REGISTROS NA TABELA
        factory(\CodeAgenda\Entities\Pessoa::class, 30 )->create();
    }
}
