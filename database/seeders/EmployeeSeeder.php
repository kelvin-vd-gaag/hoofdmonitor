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
//      TODO:  De schaal (salary_grade) is fictief voor nu

        $salary_grades = ['docent', 'expert docent', 'senior docent'];

        DB::table('employees')->insert([
            ['name' => 'Mike Snoei', 'email' => 'm.snoei@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Priscilla van Velzen', 'email' => 'p.vanvelzen@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Ruud van Zandwijk', 'email' => 'r.vanzandwijk@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Charlston Locadia', 'email' => 'c.locadia@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Jamal Enanaa', 'email' => 'j.enanaa@tcrmbo.nl', 'fte' => 0.6, 'available_task_hours' => 240, 'available_teaching_hours' => 400, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Ali Karaca', 'email' => 'a.karaca@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Roeland Bot', 'email' => 'r.bot@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Jagmeet Sachdeva', 'email' => 'j.sachdeva@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Marcel Bostelaar', 'email' => 'm.bostelaar@tcrmbo.nl', 'fte' => 0.3, 'available_task_hours' => 120, 'available_teaching_hours' => 200, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Paul Van de Kar', 'email' => 'p.vandekar@tcrmbo.nl', 'fte' => 0.5, 'available_task_hours' => 200, 'available_teaching_hours' => 300, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Marcel Berkien', 'email' => 'm.berkien@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 500, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Lenny Tapia-S.', 'email' => 'l.tapias@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Stevens Rebin', 'email' => 's.rebin@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Shams Nawabi', 'email' => 's.nawabi@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Peter Kuijper', 'email' => 'p.kuijper@tcrmbo.nl', 'fte' => 0.8, 'available_task_hours' => 320, 'available_teaching_hours' => 600, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Vinod Poenai', 'email' => 'v.poenai@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Bes Ternava', 'email' => 'b.ternava@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Sariska Jahani', 'email' => 's.jahani@tcrmbo.nl', 'fte' => 0.4, 'available_task_hours' => 160, 'available_teaching_hours' => 200, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Satia Autar', 'email' => 's.autar@tcrmbo.nl', 'fte' => 0.3, 'available_task_hours' => 120, 'available_teaching_hours' => 300, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Renske van Rhijn', 'email' => 'r.vanrhijn@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Kelvin van der Gaag', 'email' => 'k.vandergaag@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Cassandra van Gessel', 'email' => 'c.vangessel@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Fred Hoksbergen', 'email' => 'f.hoksbergen@tcrmbo.nl', 'fte' => 0.1, 'available_task_hours' => 40, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Khalid Seghrouchni', 'email' => 'k.seghrouchni@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Malti Chedi', 'email' => 'm.chedi@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Bassel Dadouch', 'email' => 'b.dadouch@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Emre Er', 'email' => 'e.er@tcrmbo.nl', 'fte' => 0.6, 'available_task_hours' => 240, 'available_teaching_hours' => 400, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Darryl Lie Tjong Louis', 'email' => 'd.lietjonglouis@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Jolanda Riedijk', 'email' => 'j.riedijk@tcrmbo.nl', 'fte' => 0.4, 'available_task_hours' => 160, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Daniel Sebatu', 'email' => 'd.sebatu@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Nick Damsma', 'email' => 'n.damsma@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Andesh Harnam', 'email' => 'a.harnam@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)]],
            ['name' => 'Kishore Mangre', 'email' => 'k.mangre@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)]]
        ]);


    }
}
