<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrawerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drawers')->insert([
            [
                'name' => 'André Franquin',
                'birth_year' => 1924,
                'nationality' => 'Belge',
                'description' => "André Franquin, né le 3 janvier 1924 à Etterbeek (Belgique) et mort le 5 janvier 1997 à Saint-Laurent-du-Var (France), est un auteur belge francophone de bande dessinée, principalement connu pour les séries Spirou et Fantasio, Gaston, Modeste et Pompon et les Idées noires ; il est aussi le créateur du Marsupilami, animal imaginaire.",
            ],
            [
                'name' => 'Morris',
                'birth_year' => 1923,
                'nationality' => 'Belge',
                'description' => "Maurice de Bevere, dit Morris, né le 1er décembre 1923 à Courtrai et mort le 16 juillet 2001 à Bruxelles, est un auteur de bandes dessinées belge connu comme créateur en 1946 de Lucky Luke, série populaire qu'il a dessinée jusqu'à sa mort, seul ou en collaboration avec divers scénaristes, dont René Goscinny. Il a qualifié pour la première fois la bande dessinée de « neuvième art » dans le journal Spirou, en 19651. ",
            ],
            [
                'name' => 'Hergé',
                'birth_year' => 1907,
                'nationality' => 'Belge',
                'description' => "Georges Remi, dit Hergé, né le 22 mai 1907 à Etterbeek et mort le 3 mars 1983 à Woluwe-Saint-Lambert, est un auteur de bande dessinée belge, principalement connu pour Les Aventures de Tintin, l'une des bandes dessinées européennes les plus populaires du XXe siècle. ",
            ],
            
        ]);
    }
}
