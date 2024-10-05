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
            ['id' => 1, 'name' => 'Mike Snoei', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 800],
            ['id' => 2, 'name' => 'Priscilla van Velzen', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 800],
            ['id' => 3, 'name' => 'Ruud van Zandwijk', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 0],
            ['id' => 5, 'name' => 'Charlston Locadia', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 800],
            ['id' => 6, 'name' => 'Jamal Enanaa', 'fte' => '0.6', 'available_task_hours' => 0, 'available_teaching_hours' => 400],
            ['id' => 7, 'name' => 'Ali Karaca', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 800],
            ['id' => 8, 'name' => 'Roeland Bot', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 800],
            ['id' => 9, 'name' => 'Jagmeet Sachdeva', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 800],
            ['id' => 10, 'name' => 'Marcel Bostelaar', 'fte' => '0.3', 'available_task_hours' => 0, 'available_teaching_hours' => 200],
            ['id' => 11, 'name' => 'Paul Van de Kar', 'fte' => '0.5', 'available_task_hours' => 0, 'available_teaching_hours' => 300],
            ['id' => 12, 'name' => 'Marcel Berkien', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 500],
            ['id' => 13, 'name' => 'Lenny Tapia-S.', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 0],
            ['id' => 14, 'name' => 'Stevens Rebin', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 0],
            ['id' => 15, 'name' => 'Shams Nawabi', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 800],
            ['id' => 16, 'name' => 'Peter Kuijper', 'fte' => '0.8', 'available_task_hours' => 0, 'available_teaching_hours' => 600],
            ['id' => 17, 'name' => 'Vinod Poenai', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 800],
            ['id' => 18, 'name' => 'Bes Ternava', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 800],
            ['id' => 19, 'name' => 'Sariska Jahani', 'fte' => '0.4', 'available_task_hours' => 0, 'available_teaching_hours' => 200],
            ['id' => 21, 'name' => 'Satia Autar', 'fte' => '0.3', 'available_task_hours' => 0, 'available_teaching_hours' => 300],
            ['id' => 22, 'name' => 'Renske van Rhijn', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 800],
            ['id' => 23, 'name' => 'Kelvin van der Gaag', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 800],
            ['id' => 24, 'name' => 'Cassandra van Gessel', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 800],
            ['id' => 25, 'name' => 'Fred Hoksbergen', 'fte' => '0.1', 'available_task_hours' => 0, 'available_teaching_hours' => 0],
            ['id' => 26, 'name' => 'Khalid Seghrouchni', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 800],
            ['id' => 27, 'name' => 'Malti Chedi', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 800],
            ['id' => 28, 'name' => 'Bassel Dadouch', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 800],
            ['id' => 29, 'name' => 'Emre Er', 'fte' => '0.6', 'available_task_hours' => 0, 'available_teaching_hours' => 400],
            ['id' => 30, 'name' => 'Darryl Lie Tjong Louis', 'fte' => '1', 'available_task_hours' => 0, 'available_teaching_hours' => 0],
            ['id' => 31, 'name' => 'Jolanda Riedijk', 'fte' => '0.4', 'available_task_hours' => 0, 'available_teaching_hours' => 0],
            ['id' => 32, 'name' => 'Daniel Sebatu', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 0],
            ['id' => 33, 'name' => 'Nick Damsma', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 0],
            ['id' => 34, 'name' => 'Andesh Harnam', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 0],
            ['id' => 35, 'name' => 'Kishore Mangre', 'fte' => '1.0', 'available_task_hours' => 0, 'available_teaching_hours' => 0],
        ]);
    }
}
