<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeetingUserUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('meeting_user_users')->insert([
            "first_user_id"=>"3",
            "second_user_id"=>"7",
            "day"=>"2024-12-09",
            "hour"=>"1",
        ]);
        DB::table('meeting_user_users')->insert([
            "first_user_id"=>"4",
            "second_user_id"=>"8",
            "day"=>"2024-12-09",
            "hour"=>"2",
        ]);
        DB::table('meeting_user_users')->insert([
            "first_user_id"=>"3",
            "second_user_id"=>"9",
            "day"=>"2024-12-10",
            "hour"=>"3",
        ]);
        DB::table('meeting_user_users')->insert([
            "first_user_id"=>"4",
            "second_user_id"=>"10",
            "day"=>"2024-12-10",
            "hour"=>"4",
        ]);
        DB::table('meeting_user_users')->insert([
            "first_user_id"=>"4",
            "second_user_id"=>"11",
            "day"=>"2024-12-11",
            "hour"=>"1",
        ]);
        DB::table('meeting_user_users')->insert([
            "first_user_id"=>"3",
            "second_user_id"=>"12",
            "day"=>"2024-12-11",
            "hour"=>"2",
        ]);
        DB::table('meeting_user_users')->insert([
            "first_user_id"=>"3",
            "second_user_id"=>"13",
            "day"=>"2024-12-12",
            "hour"=>"3",
        ]);
        DB::table('meeting_user_users')->insert([
            "first_user_id"=>"4",
            "second_user_id"=>"14",
            "day"=>"2024-12-12",
            "hour"=>"4",
        ]);
    }
}
