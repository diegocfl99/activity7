<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KitsSeeder extends Seeder
{
    public function run(): void
    {
        $kits = [
            'StarterKit',
            'Educational Robotics Kit',
            'Kit5',
        ];

        foreach ($kits as $kit) {
            DB::table('kits')->updateOrInsert(
                ['name' => $kit],
                [
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
