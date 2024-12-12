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
        DB::table('study_user')->insert([
            "registrationDate"=>"2024-06-14",
            "user_id"=>"7",
            "study_id"=>"1",
        ]);
        DB::table('study_user')->insert([
            "registrationDate"=>"2024-06-15",
            "user_id"=>"8",
            "study_id"=>"1",
        ]);
        DB::table('study_user')->insert([
            "registrationDate"=>"2024-06-16",
            "user_id"=>"9",
            "study_id"=>"2",
        ]);
        DB::table('study_user')->insert([
            "registrationDate"=>"2024-06-17",
            "user_id"=>"10",
            "study_id"=>"2",
        ]);
        DB::table('study_user')->insert([
            "registrationDate"=>"2024-06-18",
            "user_id"=>"11",
            "study_id"=>"3",
        ]);
        DB::table('study_user')->insert([
            "registrationDate"=>"2024-06-19",
            "user_id"=>"12",
            "study_id"=>"3",
        ]);
        DB::table('study_user')->insert([
            "registrationDate"=>"2024-06-20",
            "user_id"=>"13",
            "study_id"=>"4",
        ]);
        DB::table('study_user')->insert([
            "registrationDate"=>"2024-06-21",
            "user_id"=>"14",
            "study_id"=>"4",
        ]);
        DB::table('study_user')->insert([
            "registrationDate"=>"2024-06-22",
            "user_id"=>"15",
            "study_id"=>"5",
        ]);
        DB::table('study_user')->insert([
            "registrationDate"=>"2024-06-23",
            "user_id"=>"16",
            "study_id"=>"5",
        ]);
        DB::table('study_user')->insert([
            "registrationDate"=>"2024-06-24",
            "user_id"=>"17",
            "study_id"=>"5",
        ]);
        DB::table('study_user')->insert([
            "registrationDate"=>"2024-06-25",
            "user_id"=>"18",
            "study_id"=>"4",
        ]);
        DB::table('study_user')->insert([
            "registrationDate"=>"2024-06-26",
            "user_id"=>"19",
            "study_id"=>"3",
        ]);
        DB::table('study_user')->insert([
            "registrationDate"=>"2024-06-27",
            "user_id"=>"20",
            "study_id"=>"2",
        ]);
        DB::table('study_user')->insert([
            "registrationDate"=>"2024-06-28",
            "user_id"=>"21",
            "study_id"=>"1",
        ]);

    }
}
