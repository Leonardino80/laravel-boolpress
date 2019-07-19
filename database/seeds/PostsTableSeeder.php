<?php

use Illuminate\Database\Seeder;
// richiamo faker dentro la classe factory per usarlo
use Faker\factory as Faker;
// richiamo la classe post per il "new Post();"
use App\Post;
//richiamo la classe str per utilizzare str:slug
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker =Faker::create();
      for ($i=0; $i < 30 ; $i++) {
        $new_post = new Post();

        // parte del faker commentata.

        // $new_post->title = $faker->sentence();
        // $new_post->content = $faker->text(2000);
        // $new_post->author = $faker->firstName . ' ' . $faker->lastName;
        // $new_post->slug = Str::slug($new_post->title);

        $titulo = $faker->sentence();
        // fill richiede array di dati:
        $dati_post =[
          'title'=> $titulo,
          'content'=> $faker->text(2000),
          'author'=> $faker->firstName . ' ' . $faker->lastName,
          'slug'=>  Str::slug($titulo)
        ];
        $new_post->fill($dati_post);
        $new_post->save();
        // PER FAR PARTIRE IL SEED FACCIO DA PROMPT : PHP ARTISAN DB:SEED
      }
    }
}
