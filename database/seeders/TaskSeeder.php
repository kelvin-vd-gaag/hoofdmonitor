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
            ['name' => 'Open dagen', 'hours' => 190, 'initial_hours' => 190, 'slug' => 'open-dagen', 'deadline' => '2024-10-20'],
            ['name' => 'No-show', 'hours' => 90, 'initial_hours' => 90, 'slug' => 'no-show', 'deadline' => null],
            ['name' => 'Internationalisering', 'hours' => 30, 'initial_hours' => 30, 'slug' => 'internationalisering', 'deadline' => null],
            ['name' => 'Introductie', 'hours' => 70, 'initial_hours' => 70, 'slug' => 'introductie', 'deadline' => null],
            ['name' => 'Studentenraad-arena', 'hours' => 60, 'initial_hours' => 60, 'slug' => 'studentenraad-arena', 'deadline' => null],
            ['name' => 'Social media', 'hours' => 180, 'initial_hours' => 180, 'slug' => 'social-media', 'deadline' => null],
            ['name' => 'Jaarkalender', 'hours' => 200, 'initial_hours' => 200, 'slug' => 'jaarkalender', 'deadline' => null],
            ['name' => 'Kwaliteitszorg en begeleiding', 'hours' => 150, 'initial_hours' => 150, 'slug' => 'kwaliteitszorg-en-begeleiding', 'deadline' => null],
            ['name' => 'Portefeuillehouder kwaliteitsgebied BPV', 'hours' => 190, 'initial_hours' => 190, 'slug' => 'portefeuillehouder-kwaliteitsgebied-bpv', 'deadline' => null],
            ['name' => 'Portefeuillehouder kwaliteitsgebied examinering', 'hours' => 50, 'initial_hours' => 50, 'slug' => 'portefeuillehouder-kwaliteitsgebied-examinering', 'deadline' => null],
            ['name' => 'Pre-introductie', 'hours' => 160, 'initial_hours' => 160, 'slug' => 'pre-introductie', 'deadline' => null],
            ['name' => 'Projectcoördinatie en organisatie', 'hours' => 30, 'initial_hours' => 30, 'slug' => 'projectcoordinatie-en-organisatie', 'deadline' => null],
            ['name' => 'Roosters', 'hours' => 30, 'initial_hours' => 30, 'slug' => 'roosters', 'deadline' => null],
            ['name' => 'SLB BBL', 'hours' => 140, 'initial_hours' => 140, 'slug' => 'slb-bbl', 'deadline' => null],
            ['name' => 'Sociale taken', 'hours' => 70, 'initial_hours' => 70, 'slug' => 'sociale-taken', 'deadline' => null],
            ['name' => 'Teamoverleg', 'hours' => 170, 'initial_hours' => 170, 'slug' => 'teamoverleg', 'deadline' => null],
            ['name' => 'Teamscholing', 'hours' => 80, 'initial_hours' => 80, 'slug' => 'teamscholing', 'deadline' => null],
            ['name' => 'Teamuitje', 'hours' => 160, 'initial_hours' => 160, 'slug' => 'teamuitje', 'deadline' => null],
            ['name' => 'Toetscommissie', 'hours' => 80, 'initial_hours' => 80, 'slug' => 'toetscommissie', 'deadline' => null],
            ['name' => 'Diplomering', 'hours' => 50, 'initial_hours' => 50, 'slug' => 'diplomering', 'deadline' => '2024-11-25'],
            ['name' => 'Alumnibeleid', 'hours' => 170, 'initial_hours' => 170, 'slug' => 'alumnibeleid', 'deadline' => null],
            ['name' => 'Beheer leermiddelen/MBOwebshop.nl', 'hours' => 190, 'initial_hours' => 190, 'slug' => 'beheer-leermiddelen-mbowebshop.nl', 'deadline' => null],
            ['name' => 'Begeleiding nieuwe personeel', 'hours' => 10, 'initial_hours' => 10, 'slug' => 'begeleiding-nieuwe-personeel', 'deadline' => null],
            ['name' => 'BPV-coördinatie', 'hours' => 170, 'initial_hours' => 170, 'slug' => 'bpv-coordinatie', 'deadline' => null],
            ['name' => 'BPV-bezoeken', 'hours' => 100, 'initial_hours' => 100, 'slug' => 'bpv-bezoeken', 'deadline' => null],
            ['name' => 'BPV-administratie', 'hours' => 40, 'initial_hours' => 40, 'slug' => 'bpv-administratie', 'deadline' => null],
            ['name' => 'BPV-contactpersoon', 'hours' => 180, 'initial_hours' => 180, 'slug' => 'bpv-contactpersoon', 'deadline' => null],
            ['name' => 'Basismaand', 'hours' => 110, 'initial_hours' => 110, 'slug' => 'basismaand', 'deadline' => null],
            ['name' => 'Collegiale vervanging', 'hours' => 90, 'initial_hours' => 90, 'slug' => 'collegiale-vervanging', 'deadline' => null],
            ['name' => 'Coördinator werving', 'hours' => 80, 'initial_hours' => 80, 'slug' => 'coordinator-werving', 'deadline' => null],
            ['name' => 'Ontwikkeling JIJ-Plus', 'hours' => 20, 'initial_hours' => 20, 'slug' => 'ontwikkeling-jij-plus', 'deadline' => null],
            ['name' => 'Ouderavond', 'hours' => 90, 'initial_hours' => 90, 'slug' => 'ouderavond', 'deadline' => null],
            ['name' => 'NBSA/PBSA', 'hours' => 60, 'initial_hours' => 60, 'slug' => 'nbsa-pbsa', 'deadline' => null],
            ['name' => 'Leerlingbespreking', 'hours' => 80, 'initial_hours' => 80, 'slug' => 'leerlingbespreking', 'deadline' => null],
            ['name' => 'Contacten bedrijfsleven', 'hours' => 160, 'initial_hours' => 160, 'slug' => 'contacten-bedrijfsleven', 'deadline' => null],
            ['name' => 'Begeleiding stagiaires OP', 'hours' => 10, 'initial_hours' => 10, 'slug' => 'begeleiding-stagiaires-op', 'deadline' => null],
            ['name' => 'Coördinator Introductieweek', 'hours' => 160, 'initial_hours' => 160, 'slug' => 'coordinator-introductieweek', 'deadline' => null],
            ['name' => 'Keuzedelencoördinator', 'hours' => 190, 'initial_hours' => 190, 'slug' => 'keuzedelencoordinator', 'deadline' => null],
            ['name' => 'Taal-en Rekencoach', 'hours' => 190, 'initial_hours' => 190, 'slug' => 'taal-en-rekencoach', 'deadline' => null],
            ['name' => 'BPV begeleiding', 'hours' => 200, 'initial_hours' => 200, 'slug' => 'bpv-begeleiding', 'deadline' => null],
        ]);

    }
}
