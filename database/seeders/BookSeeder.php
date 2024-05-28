<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title'=>'O senhor dos anéis',
            'pages'=>'100',
            'price'=>'10.22',
            'id_user'=>'1',
        ]);

        $book->create([
            'title'=>'A onda',
            'pages'=>'40',
            'price'=>'101.00',
            'id_user'=>'2',
        ]);

        $book->create([
            'title'=>'Titanic',
            'pages'=>'200',
            'price'=>'201.00',
            'id_user'=>'3',
        ]);
        $book->create([
            'title'=>'Titanic',
            'pages'=>'200',
            'price'=>'201.00',
            'id_user'=>'4',
        ]);
        $book->create([
            'title'=>'Titanic',
            'pages'=>'200',
            'price'=>'201.00',
            'id_user'=>'5',
        ]);
        $book->create([
            'title'=>'Titanic',
            'pages'=>'200',
            'price'=>'201.00',
            'id_user'=>'6',
        ]);
        $book->create([
            'title'=>'Titanic',
            'pages'=>'200',
            'price'=>'201.00',
            'id_user'=>'7',
        ]);
        $book->create([
            'title'=>'Titanic',
            'pages'=>'200',
            'price'=>'201.00',
            'id_user'=>'8',
        ]);
        $book->create([
            'title'=>'Titanic',
            'pages'=>'200',
            'price'=>'201.00',
            'id_user'=>'9',
        ]);
        $book->create([
            'title'=>'Titanic',
            'pages'=>'200',
            'price'=>'201.00',
            'id_user'=>'10',
        ]);
    }
}
