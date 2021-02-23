<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ahmad',
            'email' => 'ahmad@ahmad.com',
            'email_verified_at'=>'2021-02-06 17:56:57',
            'password' => Hash::make('123456'),

        ]);
    }
}