<?php

use Illuminate\Database\Seeder;
use App\Produto;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
        	'nome'	=> 'Notebook',
        	'descricao'	=> 'Bem legal',
        	'preco'	=> '1000',
        	'garantia'	=> '12',
        	'avaliacao'	=> '4.5',
        ]);
    }
}
