<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;

class CategoryArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = Article::all();

       foreach ($articles as $article) {
            $randomNumber = rand(1, 3);

            if ($randomNumber === 1) {
                $article->categories()->attach(1);
            } else if ($randomNumber === 2) {
                $article->categories()->attach(2);
            } else { // 3
                $article->categories()->attach([1, 2]);
            }
       }
    }
}
