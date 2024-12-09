<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectUserScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subject_user_schedules')->insert([
            "day"=>"2024-12-09",
            "hour"=>"1",
            "user_id"=>"3",
            "subject_id"=>"1",
        ]);
        DB::table('subject_user_schedules')->insert([
            "day"=>"2024-12-09",
            "hour"=>"2",
            "user_id"=>"4",
            "subject_id"=>"2",
        ]);
        DB::table('subject_user_schedules')->insert([
            "day"=>"2024-12-09",
            "hour"=>"3",
            "user_id"=>"3",
            "subject_id"=>"2",
        ]);
        DB::table('subject_user_schedules')->insert([
            "day"=>"2024-12-09",
            "hour"=>"4",
            "user_id"=>"4",
            "subject_id"=>"2",
        ]);
        DB::table('subject_user_schedules')->insert([
            "day"=>"2024-12-09",
            "hour"=>"5",
            "user_id"=>"3",
            "subject_id"=>"2",
        ]);
        DB::table('subject_user_schedules')->insert([
            "day"=>"2024-12-10",
            "hour"=>"1",
            "user_id"=>"4",
            "subject_id"=>"2",
        ]);
        DB::table('subject_user_schedules')->insert([
            "day"=>"2024-12-10",
            "hour"=>"2",
            "user_id"=>"3",
            "subject_id"=>"2",
        ]);
        DB::table('subject_user_schedules')->insert([
            "day"=>"2024-12-10",
            "hour"=>"3",
            "user_id"=>"4",
            "subject_id"=>"2",
        ]);
        DB::table('subject_user_schedules')->insert([
            "day"=>"2024-12-10",
            "hour"=>"4",
            "user_id"=>"3",
            "subject_id"=>"2",
        ]);
        DB::table('subject_user_schedules')->insert([
            "day"=>"2024-12-10",
            "hour"=>"5",
            "user_id"=>"4",
            "subject_id"=>"2",
        ]);
        DB::table('subject_user_schedules')->insert([
            "day"=>"2024-12-11",
            "hour"=>"1",
            "user_id"=>"3",
            "subject_id"=>"2",
        ]);
        DB::table('subject_user_schedules')->insert([
            "day"=>"2024-12-11",
            "hour"=>"2",
            "user_id"=>"4",
            "subject_id"=>"2",
        ]);
        DB::table('subject_user_schedules')->insert([
            "day"=>"2024-12-11",
            "hour"=>"3",
            "user_id"=>"3",
            "subject_id"=>"2",
        ]);
        DB::table('subject_user_schedules')->insert([
            "day"=>"2024-12-11",
            "hour"=>"4",
            "user_id"=>"4",
            "subject_id"=>"2",
        ]);
        DB::table('subject_user_schedules')->insert([
            "day"=>"2024-12-12",
            "hour"=>"1",
            "user_id"=>"3",
            "subject_id"=>"2",
        ]);
    }
}
