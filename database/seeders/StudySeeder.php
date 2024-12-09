<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('studies')->insert([
            "name"=>"Desarrollo de aplicaciones multiplataforma",
            "description"=>"Desarrollo de aplicaciones multiplataforma descripcion",
        ]);
        DB::table('studies')->insert([
            "name"=>"Desarrollo de aplicaciones web",
            "description"=>"Desarrollo de aplicaciones web descripcion",
        ]);
        DB::table('studies')->insert([
            "name"=>"Técnico superior en enseñanza y animacion sociodeportiva",
            "description"=>"Técnico superior en enseñanza y animacion sociodeportiva descripcion",
        ]);
        DB::table('studies')->insert([
            "name"=>"Técnico superior en química industrial",
            "description"=>"Técnico superior en química industrial descripcion",
        ]);
        DB::table('studies')->insert([
            "name"=>"Técnico superior en diseño y amueblamiento",
            "description"=>"Técnico superior en diseño y amueblamiento descripcion",
        ]);
    }
}
