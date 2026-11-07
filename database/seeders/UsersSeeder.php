<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->updateOrInsert(
            ['email' => 'admon@robotics.com'],
            [
                'name' => 'Admon',
                'password' => Hash::make('Adm@2022'),
                'role' => 'Administrative',
                'group_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('users')->updateOrInsert(
            ['email' => 'tecmilenio@robotics.com'],
            [
                'name' => 'Tecmilenio',
                'password' => Hash::make('Adm@2022'),
                'role' => 'Teacher',
                'group_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('users')->updateOrInsert(
            ['email' => 'student@robotics.com'],
            [
                'name' => 'Student',
                'password' => Hash::make('Adm@2022'),
                'role' => 'Student',
                'group_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
