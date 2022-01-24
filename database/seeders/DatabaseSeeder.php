<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $userAdmin = [
            [
                'name' => 'admin',
                'email' => 'herry081288@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'level' => 'admin'
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'level' => 'user'
            ]
        ];
        foreach ($userAdmin as $us) {
            User::create($us);
        }
    }
}
