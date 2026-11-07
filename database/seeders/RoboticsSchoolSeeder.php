<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoboticsSchoolSeeder extends Seeder
{
    public function run(): void
    {
        // Grupos iniciales
        DB::table('groups')->insert([
            ['name' => 'beginner'],
            ['name' => 'intermediate'],
            ['name' => 'advanced'],
        ]);

        // Kits de robótica
        DB::table('kits')->insert([
            ['name' => 'StarterKit'],
            ['name' => 'Educational Robotics Kit'],
            ['name' => 'Kit5'],
        ]);

        // Cursos
        $starterKit = DB::table('kits')->where('name', 'StarterKit')->value('id');
        $educationalKit = DB::table('kits')->where('name', 'Educational Robotics Kit')->value('id');
        $kit5 = DB::table('kits')->where('name', 'Kit5')->value('id');

        DB::table('courses')->insert([
            [
                'course_key' => 'Rob101',
                'name' => 'Introduction to Robotics',
                'kit_id' => $starterKit,
            ],
            [
                'course_key' => 'Rob102',
                'name' => 'Introduction to Automation',
                'kit_id' => $starterKit,
            ],
            [
                'course_key' => 'Rob103',
                'name' => 'Programming for Robotics',
                'kit_id' => $educationalKit,
            ],
            [
                'course_key' => 'Rob104',
                'name' => 'Characteristics of a Robot',
                'kit_id' => $kit5,
            ],
        ]);
    }
}
