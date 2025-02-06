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

        DB::table('users')-> insert([
            "name"=>"test",
            "lastNames"=>"test",
            "DNI"=>"TEST5",
            "phone"=>"TEST",
            "email"=>"test5@test.com",
            "userType_id"=>3,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);

        DB::table('users')-> insert([
            "name"=>"test",
            "lastNames"=>"test",
            "DNI"=>"TEST6",
            "phone"=>"TEST",
            "email"=>"test6@test.com",
            "userType_id"=>1,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);

        DB::table('users')-> insert([
            "name"=>"test",
            "lastNames"=>"test",
            "DNI"=>"TEST7",
            "phone"=>"TEST",
            "email"=>"test7@test.com",
            "userType_id"=>2,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);
        DB::table('users')-> insert([
            "name"=>"estudiante1",
            "lastNames"=>"estudiante1",
            "DNI"=>"estudiante1",
            "phone"=>"estudiante1",
            "email"=>"estudiante1@test.com",
            "userType_id"=>4,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);
        DB::table('users')-> insert([
            "name"=>"estudiante2",
            "lastNames"=>"estudiante2",
            "DNI"=>"estudiante2",
            "phone"=>"estudiante2",
            "email"=>"estudiante2@test.com",
            "userType_id"=>4,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);
        DB::table('users')-> insert([
            "name"=>"estudiante3",
            "lastNames"=>"estudiante3",
            "DNI"=>"estudiante3",
            "phone"=>"estudiante3",
            "email"=>"estudiante3@test.com",
            "userType_id"=>4,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);
        DB::table('users')-> insert([
            "name"=>"estudiante4",
            "lastNames"=>"estudiante4",
            "DNI"=>"estudiante4",
            "phone"=>"estudiante4",
            "email"=>"estudiante4@test.com",
            "userType_id"=>4,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);
        DB::table('users')-> insert([
            "name"=>"estudiante5",
            "lastNames"=>"estudiante5",
            "DNI"=>"estudiante5",
            "phone"=>"estudiante5",
            "email"=>"estudiante5@test.com",
            "userType_id"=>4,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);
        DB::table('users')-> insert([
            "name"=>"estudiante6",
            "lastNames"=>"estudiante6",
            "DNI"=>"estudiante6",
            "phone"=>"estudiante6",
            "email"=>"estudiante6@test.com",
            "userType_id"=>4,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);
        DB::table('users')-> insert([
            "name"=>"estudiante7",
            "lastNames"=>"estudiante7",
            "DNI"=>"estudiante7",
            "phone"=>"estudiante7",
            "email"=>"estudiante7@test.com",
            "userType_id"=>4,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);
        DB::table('users')-> insert([
            "name"=>"estudiante8",
            "lastNames"=>"estudiante8",
            "DNI"=>"estudiante8",
            "phone"=>"estudiante8",
            "email"=>"estudiante8@test.com",
            "userType_id"=>4,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);
        DB::table('users')-> insert([
            "name"=>"estudiante9",
            "lastNames"=>"estudiante9",
            "DNI"=>"estudiante9",
            "phone"=>"estudiante9",
            "email"=>"estudiante9@test.com",
            "userType_id"=>4,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);
        DB::table('users')-> insert([
            "name"=>"estudiante10",
            "lastNames"=>"estudiante10",
            "DNI"=>"estudiante10",
            "phone"=>"estudiante10",
            "email"=>"estudiante10@test.com",
            "userType_id"=>4,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);
        DB::table('users')-> insert([
            "name"=>"estudiante11",
            "lastNames"=>"estudiante11",
            "DNI"=>"estudiante11",
            "phone"=>"estudiante11",
            "email"=>"estudiante11@test.com",
            "userType_id"=>4,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);
        DB::table('users')-> insert([
            "name"=>"estudiante12",
            "lastNames"=>"estudiante12",
            "DNI"=>"estudiante12",
            "phone"=>"estudiante12",
            "email"=>"estudiante12@test.com",
            "userType_id"=>4,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);
        DB::table('users')-> insert([
            "name"=>"estudiante13",
            "lastNames"=>"estudiante13",
            "DNI"=>"estudiante13",
            "phone"=>"estudiante13",
            "email"=>"estudiante13@test.com",
            "userType_id"=>4,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);
        DB::table('users')-> insert([
            "name"=>"estudiante14",
            "lastNames"=>"estudiante14",
            "DNI"=>"estudiante14",
            "phone"=>"estudiante14",
            "email"=>"estudiante14@test.com",
            "userType_id"=>4,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);
        DB::table('users')-> insert([
            "name"=>"estudiante15",
            "lastNames"=>"estudiante15",
            "DNI"=>"estudiante15",
            "phone"=>"estudiante15",
            "email"=>"estudiante15@test.com",
            "userType_id"=>4,
            "password"=>"$2y$10$/E.Nr1M4wHLm5n5OwbqGE.Eh1jkgEzqNEXV/DRaqlbElQHgAdBR3i"
        ]);

    }
}
