<?php

use Illuminate\Database\Seeder;
use App\News;

class NewsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('news')->delete();

        // news_seed
        News::create(array(
            'title' => 'Nieuwe website',
            'slug' => 'nieuwe-website',
            'img' => 'nieuws-1.jpg',
            'content' => 'Oosterplas heeft een nieuwe website. De site is gemaakt door studenten van Avans Hogeschool te \'s Hertogenbosch',
            'intro' => 'We hebben een nieuwe website. Bezoeker staat centraal'
        ));

        News::create(array(
            'title' => 'B-battle uitslagen',
            'slug' => 'uitslag-b-battle',
            'img' => 'b-battle-2017.jpg',
            'content' => 'De uitslagen van de b-battle zijn bekend. De winnaar van dit jaar is groep M, bestaande uit Maartje, Merel, Melissa en Madelon. Gefeliciteerd dames.',
            'intro' => 'De uitslagen van de b-battle zijn bekend. In februari heeft de b-battle plaatsgevonden..'
        ));

        News::create(array(
            'title' => 'Huiswerkbegeleiding wijzigingen',
            'slug' => 'wijzigingen-huiswerkbegeleiding',
            'img' => 'huiswerk.jpg',
            'content' => 'De huiswerkbegeleiding wordt gewijzigd.',
            'intro' => 'De huiswerkbegeleiding wordt gewijzigd.'
        ));
    }
}