<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'nome' => 'Calçados',
            'image' => '/img/shoe-1589220_640.jpg',
        ]);
        Tag::create([
            'nome' => 'Roupas',
            'image' => '/img/feet-349687_640.jpg',
        ]);
        Tag::create([
            'nome' => 'Acessórios',
            'image' => '/img/wrist-watch-2159351_640.jpg',
        ]);
        Tag::create([
            'nome' => 'Construção',
            'image' => '/img/tools-864983_640.jpg',
        ]);
        Tag::create([
            'nome' => 'Livros',
            'image' => '/img/knowledge-1052010_640.jpg',
        ]);
        Tag::create([
            'nome' => 'Ferramentas',
            'image' => '/img/plumbing-840835_640.jpg',
        ]);
        Tag::create([
            'nome' => 'Computador',
            'image' => '/img/workplace-2303851_640.jpg',
        ]);
        Tag::create([
            'nome' => 'Games e Consoles',
            'image' => '/img/video-games-1557358_640.jpg',
        ]);
    }
}
