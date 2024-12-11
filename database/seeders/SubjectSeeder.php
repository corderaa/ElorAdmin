<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            "name"=>"Programacion",
            "description"=>"Programacion descripcion",
            "studies_id"=>"1",
        ]);
        DB::table('subjects')->insert([
            "name"=>"Base de datos",
            "description"=>"Base de datos descripcion",
            "studies_id"=>"1",
        ]);
        DB::table('subjects')->insert([
            "name"=>"Lenguaje de marcas",
            "description"=>"Lenguaje de marcas descripcion",
            "studies_id"=>"1",
        ]);
        DB::table('subjects')->insert([
            "name"=>"Programacion",
            "description"=>"Programacion descripcion",
            "studies_id"=>"2",
        ]);
        DB::table('subjects')->insert([
            "name"=>"Base de datos",
            "description"=>"Base de datos descripcion",
            "studies_id"=>"2",
        ]);
        DB::table('subjects')->insert([
            "name"=>"Lenguaje de marcas",
            "description"=>"Lenguaje de marcas descripcion",
            "studies_id"=>"2",
        ]);
        DB::table('subjects')->insert([
            "name"=>"Actividades físico-deportivas individuales",
            "description"=>"Actividades físico-deportivas individuales descripcion",
            "studies_id"=>"3",
        ]);
        DB::table('subjects')->insert([
            "name"=>"Actividades físico-deportivas en equipo",
            "description"=>"Actividades físico-deportivas en equipo descripcion",
            "studies_id"=>"3",
        ]);
        DB::table('subjects')->insert([
            "name"=>"Reactores químicos",
            "description"=>"Reactores químicos descripcion",
            "studies_id"=>"4",
        ]);
        DB::table('subjects')->insert([
            "name"=>"Generación y recuperación de energía",
            "description"=>"Generación y recuperación de energía descripcion",
            "studies_id"=>"4",
        ]);
        DB::table('subjects')->insert([
            "name"=>"Automatización en carpintería y mueble",
            "description"=>"Automatización en carpintería y mueble descripcion",
            "studies_id"=>"5",
        ]);
        DB::table('subjects')->insert([
            "name"=>"Diseño de carpintería y mobiliario",
            "description"=>"Diseño de carpintería y mobiliario descripcion",
            "studies_id"=>"5",
        ]);
    }
}
