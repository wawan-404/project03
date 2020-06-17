<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "wawan",
            "email" => "wawan@untan.ac.id",
            "role_akses" => "admin",
            "password" => Hash::make('admin'),
        ]);
    }
}
