<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            [
                'name' => "Even Vågen",
                'email' => "evenvagen@gmail.com",
                'email_verified_at' => now(),
                'password' => '$2y$10$ouK3Wl8Clluk/WgwmfPfa.j/FGhOBHxQgFntTErE4YbF3iA2YAhaC', //eplekake
                'remember_token' => Str::random(10),
            ],


            [
                'name' => "John Doe",
                'email' => "johndoe@mail.com",
                'email_verified_at' => now(),
                'password' => '$2y$10$ouK3Wl8Clluk/WgwmfPfa.j/FGhOBHxQgFntTErE4YbF3iA2YAhaC', //eplekake
                'remember_token' => Str::random(10)
            ],


            [
                'name' => "Jane Doe",
                'email' => "janedoe@mail.com",
                'email_verified_at' => now(),
                'password' => '$2y$10$ouK3Wl8Clluk/WgwmfPfa.j/FGhOBHxQgFntTErE4YbF3iA2YAhaC', //eplekake
                'remember_token' => Str::random(10),
            ]
    ]);
    }
}
