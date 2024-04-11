<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
      Category::factory(5)->create();
      Article::factory(20)->create();
      Tag::factory(10)->create();

      $articles=Article::all();
      $tags=Tag::all();
      foreach ($articles as $article){
          $article->tags()->attach(
              $tags->random(rand(1,3))->pluck('id')->toArray()
          );
      }


        $this->call([
            PermisiionTableSeeder::class,
            RoleTableSeeder::class,
            UserTableSeeder::class,
        ]);

    }
}
