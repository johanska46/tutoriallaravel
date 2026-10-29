<?php

namespace Database\Seeders;

use App\Models\articlesModel;
use App\Models\usersModel;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (usersModel::all() as $user) {
            foreach (['draft', 'published'] as $i => $status) {
                articlesModel::updateOrCreate(
                    ['user_id' => $user->id, 'title' => 'Artikel '.($i + 1).' oleh '.$user->name],
                    [
                        'content' => 'Contoh isi artikel '.($i + 1).' yang ditulis oleh '.$user->name.'.',
                        'author' => $user->name,
                        'status' => $status,
                    ]
                );
            }
        }
    }
}
