<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            ['name' => 'Mike Snoei', 'email' => 'm.snoei@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Priscilla van Velzen', 'email' => 'p.vanvelzen@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Ruud van Zandwijk', 'email' => 'r.vanzandwijk@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0],
            ['name' => 'Charlston Locadia', 'email' => 'c.locadia@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Jamal Enanaa', 'email' => 'j.enanaa@tcrmbo.nl', 'fte' => 0.6, 'available_task_hours' => 240, 'available_teaching_hours' => 400],
            ['name' => 'Ali Karaca', 'email' => 'a.karaca@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Roeland Bot', 'email' => 'r.bot@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Jagmeet Sachdeva', 'email' => 'j.sachdeva@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Marcel Bostelaar', 'email' => 'm.bostelaar@tcrmbo.nl', 'fte' => 0.3, 'available_task_hours' => 120, 'available_teaching_hours' => 200],
            ['name' => 'Paul Van de Kar', 'email' => 'p.vandekar@tcrmbo.nl', 'fte' => 0.5, 'available_task_hours' => 200, 'available_teaching_hours' => 300],
            ['name' => 'Marcel Berkien', 'email' => 'm.berkien@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 500],
            ['name' => 'Lenny Tapia-S.', 'email' => 'l.tapias@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0],
            ['name' => 'Stevens Rebin', 'email' => 's.rebin@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0],
            ['name' => 'Shams Nawabi', 'email' => 's.nawabi@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Peter Kuijper', 'email' => 'p.kuijper@tcrmbo.nl', 'fte' => 0.8, 'available_task_hours' => 320, 'available_teaching_hours' => 600],
            ['name' => 'Vinod Poenai', 'email' => 'v.poenai@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Bes Ternava', 'email' => 'b.ternava@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Sariska Jahani', 'email' => 's.jahani@tcrmbo.nl', 'fte' => 0.4, 'available_task_hours' => 160, 'available_teaching_hours' => 200],
            ['name' => 'Satia Autar', 'email' => 's.autar@tcrmbo.nl', 'fte' => 0.3, 'available_task_hours' => 120, 'available_teaching_hours' => 300],
            ['name' => 'Renske van Rhijn', 'email' => 'r.vanrhijn@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Kelvin van der Gaag', 'email' => 'k.vandergaag@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Cassandra van Gessel', 'email' => 'c.vangessel@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Fred Hoksbergen', 'email' => 'f.hoksbergen@tcrmbo.nl', 'fte' => 0.1, 'available_task_hours' => 40, 'available_teaching_hours' => 0],
            ['name' => 'Khalid Seghrouchni', 'email' => 'k.seghrouchni@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Malti Chedi', 'email' => 'm.chedi@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Bassel Dadouch', 'email' => 'b.dadouch@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Emre Er', 'email' => 'e.er@tcrmbo.nl', 'fte' => 0.6, 'available_task_hours' => 240, 'available_teaching_hours' => 400],
            ['name' => 'Darryl Lie Tjong Louis', 'email' => 'd.lietjonglouis@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0],
            ['name' => 'Jolanda Riedijk', 'email' => 'j.riedijk@tcrmbo.nl', 'fte' => 0.4, 'available_task_hours' => 160, 'available_teaching_hours' => 0],
            ['name' => 'Daniel Sebatu', 'email' => 'd.sebatu@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0],
            ['name' => 'Nick Damsma', 'email' => 'n.damsma@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0],
            ['name' => 'Andesh Harnam', 'email' => 'a.harnam@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0],
            ['name' => 'Kishore Mangre', 'email' => 'k.mangre@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0]
        ]);

    }
}
