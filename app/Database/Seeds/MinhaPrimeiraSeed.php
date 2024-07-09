<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MinhaPrimeiraSeed extends Seeder
{
    public function run()
    {
        $this->db->table('produtos')->insert([
            'nome'             => 'Notebook',
            'descricao'        => 'Notebook da Dell',
            'valor_de_compra'  => 1299.9,
            'valor_de_venda'   => 1599.9,
            'quantidade'       => 9,
            'validade'         => ''
        ]);

        $this->db->table('produtos')->insert([
            'nome'             => 'Smartphone',
            'descricao'        => 'Smartphone da Samsumg',
            'valor_de_compra'  => 1299.9,
            'valor_de_venda'   => 1599.9,
            'quantidade'       => 9,
            'validade'         => ''
        ]);
    }
}
