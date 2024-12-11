<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserStudiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_studies')->insert([
            "registrationDate"=>"2024-06-14",
            "user_id"=>"7",
            "studies_id"=>"1",
        ]);
        DB::table('user_studies')->insert([
            "registrationDate"=>"2024-06-15",
            "user_id"=>"8",
            "studies_id"=>"1",
        ]);
        DB::table('user_studies')->insert([
            "registrationDate"=>"2024-06-16",
            "user_id"=>"9",
            "studies_id"=>"2",
        ]);
        DB::table('user_studies')->insert([
            "registrationDate"=>"2024-06-17",
            "user_id"=>"10",
            "studies_id"=>"2",
        ]);
        DB::table('user_studies')->insert([
            "registrationDate"=>"2024-06-18",
            "user_id"=>"11",
            "studies_id"=>"3",
        ]);
        DB::table('user_studies')->insert([
            "registrationDate"=>"2024-06-19",
            "user_id"=>"12",
            "studies_id"=>"3",
        ]);
        DB::table('user_studies')->insert([
            "registrationDate"=>"2024-06-20",
            "user_id"=>"13",
            "studies_id"=>"4",
        ]);
        DB::table('user_studies')->insert([
            "registrationDate"=>"2024-06-21",
            "user_id"=>"14",
            "studies_id"=>"4",
        ]);
        DB::table('user_studies')->insert([
            "registrationDate"=>"2024-06-22",
            "user_id"=>"15",
            "studies_id"=>"5",
        ]);
        DB::table('user_studies')->insert([
            "registrationDate"=>"2024-06-23",
            "user_id"=>"16",
            "studies_id"=>"5",
        ]);
        DB::table('user_studies')->insert([
            "registrationDate"=>"2024-06-24",
            "user_id"=>"17",
            "studies_id"=>"5",
        ]);
        DB::table('user_studies')->insert([
            "registrationDate"=>"2024-06-25",
            "user_id"=>"18",
            "studies_id"=>"4",
        ]);
        DB::table('user_studies')->insert([
            "registrationDate"=>"2024-06-26",
            "user_id"=>"19",
            "studies_id"=>"3",
        ]);
        DB::table('user_studies')->insert([
            "registrationDate"=>"2024-06-27",
            "user_id"=>"20",
            "studies_id"=>"2",
        ]);
        DB::table('user_studies')->insert([
            "registrationDate"=>"2024-06-28",
            "user_id"=>"21",
            "studies_id"=>"1",
        ]);

    }
}
