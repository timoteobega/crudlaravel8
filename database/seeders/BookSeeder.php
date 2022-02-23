<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title'=>'O home mais rico da Babilônia',
            'id_user'=>'2',
            'pages'=>'160',
            'price'=>'13.90',
        ]);

        $book->create([
            'title'=>'Heartstopper: Dois garotos, um encontro',
            'id_user'=>'1',
            'pages'=>'288',
            'price'=>'27.70',
        ]);

        $book->create([
            'title'=>'Vade Mecum 2022',
            'id_user'=>'1',
            'pages'=>'2608',
            'price'=>'169.90',
        ]);

        $book->create([
            'title'=>'Pai rico, pai pobre',
            'id_user'=>'2',
            'pages'=>'336',
            'price'=>'26.85',
        ]);

        $book->create([
            'title'=>'12 regras para a vida: Um antídoto para o caos',
            'id_user'=>'1',
            'pages'=>'448',
            'price'=>'29.90',
        ]);

        $book->create([
            'title'=>'Mais esperto que o diabo: O mistério revelado da liberdade e do sucesso',
            'id_user'=>'3',
            'pages'=>'239',
            'price'=>'27.10',
        ]);
    }
}
