<?php

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++)
        {
            $newArticle = new Article();
            $newArticle->title = $faker->words(6, true);
            $newArticle->slug = Str::of($newArticle->title)->slug('-');
            $newArticle->content = $faker->text(200);
            $newArticle->author = $faker->word();

            $newArticle->save();
        }
    }
}
