<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            ['name' => 'Open dagen', 'hours' => 160],
            ['name' => 'No-show', 'hours' => 110],
            ['name' => 'Internationalisering', 'hours' => 150],
            ['name' => 'Introductie', 'hours' => 40],
            ['name' => 'Studentenraad-arena', 'hours' => 160],
            ['name' => 'Social media', 'hours' => 190],
            ['name' => 'Jaarkalender', 'hours' => 70],
            ['name' => 'Kwaliteitszorg en begeleiding', 'hours' => 110],
            ['name' => 'Portefeuillehouder kwaliteitsgebied BPV', 'hours' => 60],
            ['name' => 'Portefeuillehouder kwaliteitsgebied examinering', 'hours' => 30],
            ['name' => 'Pre-introductie', 'hours' => 160],
            ['name' => 'Projectcoördinatie en organisatie', 'hours' => 100],
            ['name' => 'Roosters', 'hours' => 120],
            ['name' => 'SLB BBL', 'hours' => 40],
            ['name' => 'Sociale taken', 'hours' => 10],
            ['name' => 'Teamoverleg', 'hours' => 100],
            ['name' => 'Teamscholing', 'hours' => 70],
            ['name' => 'Teamuitje', 'hours' => 150],
            ['name' => 'Toetscommissie', 'hours' => 130],
            ['name' => 'Vaststellingscommissie/Examinering', 'hours' => 130],
            ['name' => 'Vertrouwenspersoon', 'hours' => 190],
            ['name' => 'Voorlichter', 'hours' => 60],
            ['name' => 'Voorlichting BPV', 'hours' => 200],
            ['name' => 'Voorzitter vakgroep', 'hours' => 80],
            ['name' => 'SLB BOL', 'hours' => 100],
            ['name' => 'Urban Logistics', 'hours' => 70],
            ['name' => 'Examencommissie', 'hours' => 130],
            ['name' => 'Diplomering', 'hours' => 140],
            ['name' => 'Alumnibeleid', 'hours' => 80],
            ['name' => 'Beheer leermiddelen/MBOwebshop.nl', 'hours' => 70],
            ['name' => 'Begeleiding nieuwe personeel', 'hours' => 150],
            ['name' => 'BPV-coördinatie', 'hours' => 50],
            ['name' => 'BPV-bezoeken', 'hours' => 110],
            ['name' => 'BPV-administratie', 'hours' => 160],
            ['name' => 'BPV-contactpersoon', 'hours' => 70],
            ['name' => 'Basismaand', 'hours' => 130],
            ['name' => 'Collegiale vervanging', 'hours' => 10],
            ['name' => 'Coördinator werving', 'hours' => 180],
            ['name' => 'Ontwikkeling JIJ-Plus', 'hours' => 80],
            ['name' => 'Ouderavond', 'hours' => 80],
            ['name' => 'NBSA/PBSA', 'hours' => 190],
            ['name' => 'Leerlingbespreking', 'hours' => 30],
            ['name' => 'Contacten bedrijfsleven', 'hours' => 160],
            ['name' => 'Begeleiding stagiaires OP', 'hours' => 110],
            ['name' => 'Coördinator Introductieweek', 'hours' => 170],
            ['name' => 'Keuzedelencoördinator', 'hours' => 120],
            ['name' => 'Taal-en Rekencoach', 'hours' => 70],
            ['name' => 'BPV begeleiding', 'hours' => 200],
        ]);
    }
}
