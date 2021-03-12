<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => 'Marsupilami',
                'creation_year' => 1952,
                'comic_book' => 'Le journal de Spirou',
                'drawer_id' => '1',
                'description' => "Marsupilami est une bande dessinée mettant en scène l'animal fantastique du même nom (distincte des histoires de Spirou et Fantasio dans lesquelles le marsupilami peut occuper une place importante).",
            ],
            [
                'name' => 'Tintin',
                'creation_year' => 1929,
                'comic_book' => 'Les aventures de Tintin',
                'drawer_id' => '2',
                'description' => "Les Aventures de Tintin constituent une série de bandes dessinées créée par le dessinateur et scénariste belge Hergé.",
            ],
            [
                'name' => 'Rantanplan',
                'creation_year' => 1983,
                'comic_book' => 'Lucky Luc',
                'drawer_id' => '3',
                'description' => "Rantanplan est considéré comme l'animal le plus bête de l'Ouest (surtout par Jolly Jumper, le cheval de Lucky Luke). Ses décisions et ses réflexions toutes plus stupides ou absurdes les unes que les autres font sourire presque à coup sûr. Il est particulièrement aimé par Averell Dalton, le plus nigaud des quatre frères Dalton, si bien que Rantanplan pense, à différentes reprises, qu'Averell est son père, son frère, etc.",
            ],
            [
                'name' => 'Gaston',
                'creation_year' => 1957,
                'comic_book' => 'Le journal de Spirou',
                'drawer_id' => '1',
                'description' => "Gaston est une série de bande dessinée franco-belge humoristique créée en février 1957 par André Franquin. La série met en scène un employé de bureau nommé Gaston Lagaffe, travaillant au Journal de Spirou, grand fainéant et commettant chaque semaine de nombreuses gaffes (913 au total).",
            ],
        ]);
    }

}
