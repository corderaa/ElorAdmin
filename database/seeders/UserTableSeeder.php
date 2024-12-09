<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')-> insert([
            "name"=>"test",
            "lastNames"=>"test",
            "DNI"=>"TEST2",
            "phone"=>"TEST",
            "email"=>"test2@test.com",
            "userType_id"=>1,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);

        DB::table('users')-> insert([
            "name"=>"test",
            "lastNames"=>"test",
            "DNI"=>"TEST3",
            "phone"=>"TEST",
            "email"=>"test3@test.com",
            "userType_id"=>4,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);

        DB::table('users')-> insert([
            "name"=>"test",
            "lastNames"=>"test",
            "DNI"=>"TEST4",
            "phone"=>"TEST",
            "email"=>"test4@test.com",
            "userType_id"=>3,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);
    }
}
