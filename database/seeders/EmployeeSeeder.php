<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


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
            ['name' => 'Mike Snoei', 'email' => 'm.snoei@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Mike Snoei')],
            ['name' => 'Priscilla van Velzen', 'email' => 'p.vanvelzen@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Priscilla van Velzen')],
            ['name' => 'Ruud van Zandwijk', 'email' => 'r.vanzandwijk@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Ruud van Zandwijk')],
            ['name' => 'Charlston Locadia', 'email' => 'c.locadia@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Charlston Locadia')],
            ['name' => 'Jamal Enanaa', 'email' => 'j.enanaa@tcrmbo.nl', 'fte' => 0.6, 'available_task_hours' => 240, 'available_teaching_hours' => 400, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Jamal Enanaa')],
            ['name' => 'Ali Karaca', 'email' => 'a.karaca@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Ali Karaca')],
            ['name' => 'Roeland Bot', 'email' => 'r.bot@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Roeland Bot')],
            ['name' => 'Jagmeet Sachdeva', 'email' => 'j.sachdeva@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Jagmeet Sachdeva')],
            ['name' => 'Marcel Bostelaar', 'email' => 'm.bostelaar@tcrmbo.nl', 'fte' => 0.3, 'available_task_hours' => 120, 'available_teaching_hours' => 200, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Marcel Bostelaar')],
            ['name' => 'Paul Van de Kar', 'email' => 'p.vandekar@tcrmbo.nl', 'fte' => 0.5, 'available_task_hours' => 200, 'available_teaching_hours' => 300, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Paul Van de Kar')],
            ['name' => 'Marcel Berkien', 'email' => 'm.berkien@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 500, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Marcel Berkien')],
            ['name' => 'Lenny Tapia-S.', 'email' => 'l.tapias@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Lenny Tapia-S.')],
            ['name' => 'Stevens Rebin', 'email' => 's.rebin@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Stevens Rebin')],
            ['name' => 'Shams Nawabi', 'email' => 's.nawabi@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Shams Nawabi')],
            ['name' => 'Peter Kuijper', 'email' => 'p.kuijper@tcrmbo.nl', 'fte' => 0.8, 'available_task_hours' => 320, 'available_teaching_hours' => 600, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Peter Kuijper')],
            ['name' => 'Vinod Poenai', 'email' => 'v.poenai@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Vinod Poenai')],
            ['name' => 'Bes Ternava', 'email' => 'b.ternava@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Bes Ternava')],
            ['name' => 'Sariska Jahani', 'email' => 's.jahani@tcrmbo.nl', 'fte' => 0.4, 'available_task_hours' => 160, 'available_teaching_hours' => 200, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Sariska Jahani')],
            ['name' => 'Satia Autar', 'email' => 's.autar@tcrmbo.nl', 'fte' => 0.3, 'available_task_hours' => 120, 'available_teaching_hours' => 300, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Satia Autar')],
            ['name' => 'Renske van Rhijn', 'email' => 'r.vanrhijn@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Renske van Rhijn')],
            ['name' => 'Kelvin van der Gaag', 'email' => 'k.vandergaag@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Kelvin van der Gaag')],
            ['name' => 'Cassandra van Gessel', 'email' => 'c.vangessel@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Cassandra van Gessel')],
            ['name' => 'Fred Hoksbergen', 'email' => 'f.hoksbergen@tcrmbo.nl', 'fte' => 0.1, 'available_task_hours' => 40, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Fred Hoksbergen')],
            ['name' => 'Khalid Seghrouchni', 'email' => 'k.seghrouchni@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Khalid Seghrouchni')],
            ['name' => 'Malti Chedi', 'email' => 'm.chedi@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Malti Chedi')],
            ['name' => 'Bassel Dadouch', 'email' => 'b.dadouch@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Bassel Dadouch')],
            ['name' => 'Emre Er', 'email' => 'e.er@tcrmbo.nl', 'fte' => 0.6, 'available_task_hours' => 240, 'available_teaching_hours' => 400, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Emre Er')],
            ['name' => 'Darryl Lie Tjong Louis', 'email' => 'd.lietjonglouis@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Darryl Lie Tjong Louis')],
            ['name' => 'Jolanda Riedijk', 'email' => 'j.riedijk@tcrmbo.nl', 'fte' => 0.4, 'available_task_hours' => 160, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Jolanda Riedijk')],
            ['name' => 'Daniel Sebatu', 'email' => 'd.sebatu@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Daniel Sebatu')],
            ['name' => 'Nick Damsma', 'email' => 'n.damsma@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Nick Damsma')],
            ['name' => 'Andesh Harnam', 'email' => 'a.harnam@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Andesh Harnam')],
            ['name' => 'Kishore Mangre', 'email' => 'k.mangre@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0, 'salary_grade' => $salary_grades[array_rand($salary_grades)], 'slug' => Str::slug('Kishore Mangre')]
        ]);


    }
}
