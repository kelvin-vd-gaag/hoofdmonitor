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
            ['name' => 'Mike Snoei', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Priscilla van Velzen', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Ruud van Zandwijk', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0],
            ['name' => 'Charlston Locadia', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Jamal Enanaa', 'fte' => 0.6, 'available_task_hours' => 240, 'available_teaching_hours' => 400],
            ['name' => 'Ali Karaca', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Roeland Bot', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Jagmeet Sachdeva', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Marcel Bostelaar', 'fte' => 0.3, 'available_task_hours' => 120, 'available_teaching_hours' => 200],
            ['name' => 'Paul Van de Kar', 'fte' => 0.5, 'available_task_hours' => 200, 'available_teaching_hours' => 300],
            ['name' => 'Marcel Berkien', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 500],
            ['name' => 'Lenny Tapia-S.', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0],
            ['name' => 'Stevens Rebin', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0],
            ['name' => 'Shams Nawabi', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Peter Kuijper', 'fte' => 0.8, 'available_task_hours' => 320, 'available_teaching_hours' => 600],
            ['name' => 'Vinod Poenai', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Bes Ternava', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Sariska Jahani', 'fte' => 0.4, 'available_task_hours' => 160, 'available_teaching_hours' => 200],
            ['name' => 'Satia Autar', 'fte' => 0.3, 'available_task_hours' => 120, 'available_teaching_hours' => 300],
            ['name' => 'Renske van Rhijn', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Kelvin van der Gaag', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Cassandra van Gessel', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Fred Hoksbergen', 'fte' => 0.1, 'available_task_hours' => 40, 'available_teaching_hours' => 0],
            ['name' => 'Khalid Seghrouchni', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Malti Chedi', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Bassel Dadouch', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 800],
            ['name' => 'Emre Er', 'fte' => 0.6, 'available_task_hours' => 240, 'available_teaching_hours' => 400],
            ['name' => 'Darryl Lie Tjong Louis', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0],
            ['name' => 'Jolanda Riedijk', 'fte' => 0.4, 'available_task_hours' => 160, 'available_teaching_hours' => 0],
            ['name' => 'Daniel Sebatu', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0],
            ['name' => 'Nick Damsma', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0],
            ['name' => 'Andesh Harnam', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0],
            ['name' => 'Kishore Mangre', 'fte' => 1.0, 'available_task_hours' => 400, 'available_teaching_hours' => 0],
        ]);
    }
}
