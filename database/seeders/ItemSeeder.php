<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'item_name' => 'Exemplo Item 1',
            'description' => 'Descrição do Exemplo Item 1',
            'category' => 'Categoria A',
            'price' => 19.99,
            'stock_quantity' => 50,
            'unit' => 'unidade',
            'supplier' => 'Fornecedor A',
            'date_added' => now(),
            'image_url' => 'caminho/para/imagem1.jpg',
            'specifications' => 'Especificações do Exemplo Item 1',
            'ratings' => 4.5,
            'comments' => 'Comentários sobre o Exemplo Item 1',
            'availability' => 1,
        ]);
    }
}
