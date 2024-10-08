<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Иван',
                'email' => 'ivan@mail.org',
                'password' => Hash::make('12345'),
            ],
            [
                'name' => 'Петя',
                'email' => 'petr@mail.org',
                'password' => Hash::make('12345'),
            ],
        ];

        DB::table('users')->insert($data);
    }
}
