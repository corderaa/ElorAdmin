<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeetingStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('meeting_statuses')->insert([
            "code"=>"ACCEPTED",
            "description"=>"ha sido aceptada",
        ]);
        DB::table('meeting_statuses')->insert([
            "code"=>"REJECTED",
            "description"=>"ha sido rechazada",
        ]);
        DB::table('meeting_statuses')->insert([
            "code"=>"PENDING",
            "description"=>"en espera",
        ]);
    }
}
