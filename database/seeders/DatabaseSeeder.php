<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AgeSection;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::create([
             'name' => 'Admin',
             'username' => 'admin',
             'role_id'=> 1,
             'password'=> bcrypt('admin'),
         ]);

         Role::create([
            'role_name'=>'admin',
         ]);
        Role::create([
            'role_name'=>'teacher',
        ]);
        Role::create([
            'role_name'=>'doctor',
        ]);
        Role::create([
            'role_name'=>'social',
        ]);
        Role::create([
            'role_name'=>'parent',
        ]);  Role::create([
            'role_name'=>'extra',
        ]);


        AgeSection::create([
            'from'=> 4,
            'to'=>6
        ]);

        AgeSection::create([
            'from'=> 7,
            'to'=>10
        ]);
    }
}
