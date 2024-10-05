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
            ['name' => 'Open dagen', 'hours' => 190, 'slug' => 'open-dagen'],
            ['name' => 'No-show', 'hours' => 90, 'slug' => 'no-show'],
            ['name' => 'Internationalisering', 'hours' => 30, 'slug' => 'internationalisering'],
            ['name' => 'Introductie', 'hours' => 70, 'slug' => 'introductie'],
            ['name' => 'Studentenraad-arena', 'hours' => 60, 'slug' => 'studentenraad-arena'],
            ['name' => 'Social media', 'hours' => 180, 'slug' => 'social-media'],
            ['name' => 'Jaarkalender', 'hours' => 200, 'slug' => 'jaarkalender'],
            ['name' => 'Kwaliteitszorg en begeleiding', 'hours' => 150, 'slug' => 'kwaliteitszorg-en-begeleiding'],
            ['name' => 'Portefeuillehouder kwaliteitsgebied BPV', 'hours' => 190, 'slug' => 'portefeuillehouder-kwaliteitsgebied-bpv'],
            ['name' => 'Portefeuillehouder kwaliteitsgebied examinering', 'hours' => 50, 'slug' => 'portefeuillehouder-kwaliteitsgebied-examinering'],
            ['name' => 'Pre-introductie', 'hours' => 160, 'slug' => 'pre-introductie'],
            ['name' => 'Projectcoördinatie en organisatie', 'hours' => 30, 'slug' => 'projectcoordinatie-en-organisatie'],
            ['name' => 'Roosters', 'hours' => 30, 'slug' => 'roosters'],
            ['name' => 'SLB BBL', 'hours' => 140, 'slug' => 'slb-bbl'],
            ['name' => 'Sociale taken', 'hours' => 70, 'slug' => 'sociale-taken'],
            ['name' => 'Teamoverleg', 'hours' => 170, 'slug' => 'teamoverleg'],
            ['name' => 'Teamscholing', 'hours' => 80, 'slug' => 'teamscholing'],
            ['name' => 'Teamuitje', 'hours' => 160, 'slug' => 'teamuitje'],
            ['name' => 'Toetscommissie', 'hours' => 80, 'slug' => 'toetscommissie'],
            ['name' => 'Diplomering', 'hours' => 50, 'slug' => 'diplomering'],
            ['name' => 'Alumnibeleid', 'hours' => 170, 'slug' => 'alumnibeleid'],
            ['name' => 'Beheer leermiddelen/MBOwebshop.nl', 'hours' => 190, 'slug' => 'beheer-leermiddelen/mbowebshop.nl'],
            ['name' => 'Begeleiding nieuwe personeel', 'hours' => 10, 'slug' => 'begeleiding-nieuwe-personeel'],
            ['name' => 'BPV-coördinatie', 'hours' => 170, 'slug' => 'bpv-coordinatie'],
            ['name' => 'BPV-bezoeken', 'hours' => 100, 'slug' => 'bpv-bezoeken'],
            ['name' => 'BPV-administratie', 'hours' => 40, 'slug' => 'bpv-administratie'],
            ['name' => 'BPV-contactpersoon', 'hours' => 180, 'slug' => 'bpv-contactpersoon'],
            ['name' => 'Basismaand', 'hours' => 110, 'slug' => 'basismaand'],
            ['name' => 'Collegiale vervanging', 'hours' => 90, 'slug' => 'collegiale-vervanging'],
            ['name' => 'Coördinator werving', 'hours' => 80, 'slug' => 'coordinator-werving'],
            ['name' => 'Ontwikkeling JIJ-Plus', 'hours' => 20, 'slug' => 'ontwikkeling-jij-plus'],
            ['name' => 'Ouderavond', 'hours' => 90, 'slug' => 'ouderavond'],
            ['name' => 'NBSA/PBSA', 'hours' => 60, 'slug' => 'nbsa-pbsa'],
            ['name' => 'Leerlingbespreking', 'hours' => 80, 'slug' => 'leerlingbespreking'],
            ['name' => 'Contacten bedrijfsleven', 'hours' => 160, 'slug' => 'contacten-bedrijfsleven'],
            ['name' => 'Begeleiding stagiaires OP', 'hours' => 10, 'slug' => 'begeleiding-stagiaires-op'],
            ['name' => 'Coördinator Introductieweek', 'hours' => 160, 'slug' => 'coordinator-introductieweek'],
            ['name' => 'Keuzedelencoördinator', 'hours' => 190, 'slug' => 'keuzedelencoordinator'],
            ['name' => 'Taal-en Rekencoach', 'hours' => 190, 'slug' => 'taal-en-rekencoach'],
            ['name' => 'BPV begeleiding', 'hours' => 200, 'slug' => 'bpv-begeleiding'],
        ]);
    }
}
