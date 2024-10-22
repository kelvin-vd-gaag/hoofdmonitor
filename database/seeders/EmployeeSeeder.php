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
        DB::table('employees')->insert([
            ['name' => 'john_doe_one', 'email' => 'j.doe.one@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 800, 'slug' => Str::slug('john_doe_one')],
            ['name' => 'john_doe_two', 'email' => 'j.doe.two@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 800, 'slug' => Str::slug('john_doe_two')],
            ['name' => 'john_doe_three', 'email' => 'j.doe.three@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 0, 'slug' => Str::slug('john_doe_three')],
            ['name' => 'john_doe_four', 'email' => 'j.doe.four@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 800, 'slug' => Str::slug('john_doe_four')],
            ['name' => 'john_doe_five', 'email' => 'j.doe.five@tcrmbo.nl', 'fte' => 0.6, 'available_task_hours' => 240, 'initial_available_task_hours' => 240, 'available_teaching_hours' => 400, 'slug' => Str::slug('john_doe_five')],
            ['name' => 'john_doe_six', 'email' => 'j.doe.six@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 800, 'slug' => Str::slug('john_doe_six')],
            ['name' => 'john_doe_seven', 'email' => 'j.doe.seven@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 800, 'slug' => Str::slug('john_doe_seven')],
            ['name' => 'john_doe_eight', 'email' => 'j.doe.eight@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 800, 'slug' => Str::slug('john_doe_eight')],
            ['name' => 'john_doe_nine', 'email' => 'j.doe.nine@tcrmbo.nl', 'fte' => 0.3, 'available_task_hours' => 120, 'initial_available_task_hours' => 120, 'available_teaching_hours' => 200, 'slug' => Str::slug('john_doe_nine')],
            ['name' => 'john_doe_ten', 'email' => 'j.doe.ten@tcrmbo.nl', 'fte' => 0.5, 'available_task_hours' => 200, 'initial_available_task_hours' => 200, 'available_teaching_hours' => 300, 'slug' => Str::slug('john_doe_ten')],
            ['name' => 'john_doe_eleven', 'email' => 'j.doe.eleven@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 500, 'slug' => Str::slug('john_doe_eleven')],
            ['name' => 'john_doe_twelve', 'email' => 'j.doe.twelve@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 0, 'slug' => Str::slug('john_doe_twelve')],
            ['name' => 'john_doe_thirteen', 'email' => 'j.doe.thirteen@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 0, 'slug' => Str::slug('john_doe_thirteen')],
            ['name' => 'john_doe_fourteen', 'email' => 'j.doe.fourteen@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 800, 'slug' => Str::slug('john_doe_fourteen')],
            ['name' => 'john_doe_fifteen', 'email' => 'j.doe.fifteen@tcrmbo.nl', 'fte' => 0.8, 'available_task_hours' => 320, 'initial_available_task_hours' => 320, 'available_teaching_hours' => 600, 'slug' => Str::slug('john_doe_fifteen')],
            ['name' => 'john_doe_sixteen', 'email' => 'j.doe.sixteen@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 800, 'slug' => Str::slug('john_doe_sixteen')],
            ['name' => 'john_doe_seventeen', 'email' => 'j.doe.seventeen@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 800, 'slug' => Str::slug('john_doe_seventeen')],
            ['name' => 'john_doe_eighteen', 'email' => 'j.doe.eighteen@tcrmbo.nl', 'fte' => 0.4, 'available_task_hours' => 160, 'initial_available_task_hours' => 160, 'available_teaching_hours' => 200, 'slug' => Str::slug('john_doe_eighteen')],
            ['name' => 'john_doe_nineteen', 'email' => 'j.doe.nineteen@tcrmbo.nl', 'fte' => 0.3, 'available_task_hours' => 120, 'initial_available_task_hours' => 120, 'available_teaching_hours' => 300, 'slug' => Str::slug('john_doe_nineteen')],
            ['name' => 'john_doe_twenty', 'email' => 'j.doe.twenty@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 800, 'slug' => Str::slug('john_doe_twenty')],
            ['name' => 'john_doe_twentyone', 'email' => 'j.doe.twentyone@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 800, 'slug' => Str::slug('john_doe_twentyone')],
            ['name' => 'john_doe_twentytwo', 'email' => 'j.doe.twentytwo@tcrmbo.nl', 'fte' => 0.1, 'available_task_hours' => 40, 'initial_available_task_hours' => 40, 'available_teaching_hours' => 0, 'slug' => Str::slug('john_doe_twentytwo')],
            ['name' => 'john_doe_twentythree', 'email' => 'j.doe.twentythree@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 800, 'slug' => Str::slug('john_doe_twentythree')],
            ['name' => 'john_doe_twentyfour', 'email' => 'j.doe.twentyfour@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 800, 'slug' => Str::slug('john_doe_twentyfour')],
            ['name' => 'john_doe_twentyfive', 'email' => 'j.doe.twentyfive@tcrmbo.nl', 'fte' => 0.6, 'available_task_hours' => 240, 'initial_available_task_hours' => 240, 'available_teaching_hours' => 400, 'slug' => Str::slug('john_doe_twentyfive')],
            ['name' => 'john_doe_twentysix', 'email' => 'j.doe.twentysix@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 0, 'slug' => Str::slug('john_doe_twentysix')],
            ['name' => 'john_doe_twentyseven', 'email' => 'j.doe.twentyseven@tcrmbo.nl', 'fte' => 0.4, 'available_task_hours' => 160, 'initial_available_task_hours' => 160, 'available_teaching_hours' => 0, 'slug' => Str::slug('john_doe_twentyseven')],
            ['name' => 'john_doe_twentyeight', 'email' => 'j.doe.twentyeight@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 0, 'slug' => Str::slug('john_doe_twentyeight')],
            ['name' => 'john_doe_twentynine', 'email' => 'j.doe.twentynine@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 0, 'slug' => Str::slug('john_doe_twentynine')],
            ['name' => 'john_doe_thirty', 'email' => 'j.doe.thirty@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 0, 'slug' => Str::slug('john_doe_thirty')],
            ['name' => 'john_doe_thirtyone', 'email' => 'j.doe.thirtyone@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 0, 'slug' => Str::slug('john_doe_thirtyone')],
            ['name' => 'john_doe_thirtytwo', 'email' => 'j.doe.thirtytwo@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 0, 'slug' => Str::slug('john_doe_thirtytwo')],
            ['name' => 'john_doe_thirtythree', 'email' => 'j.doe.thirtythree@tcrmbo.nl', 'fte' => 1.0, 'available_task_hours' => 400, 'initial_available_task_hours' => 400, 'available_teaching_hours' => 0, 'slug' => Str::slug('john_doe_thirtythree')],
        ]);
    }
}
