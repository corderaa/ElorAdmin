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
        $subjects = [
            1 => [
                ["name" => "Programación en Java", "description" => "Fundamentos de programación en Java y estructuras de datos."],
                ["name" => "Desarrollo móvil", "description" => "Creación de aplicaciones móviles con Android e iOS."],
                ["name" => "Gestión de proyectos", "description" => "Metodologías ágiles y gestión de software."],
            ],
            2 => [
                ["name" => "HTML, CSS y JavaScript", "description" => "Desarrollo de interfaces web modernas."],
                ["name" => "PHP y Laravel", "description" => "Creación de aplicaciones web con Laravel."],
                ["name" => "Seguridad web", "description" => "Protección contra ataques y buenas prácticas en desarrollo web."],
            ],
            3 => [
                ["name" => "Psicología del deporte", "description" => "Principios psicológicos aplicados a la actividad física."],
                ["name" => "Nutrición deportiva", "description" => "Planificación de dietas para el rendimiento físico."],
                ["name" => "Técnicas de entrenamiento", "description" => "Diseño y aplicación de programas de entrenamiento."],
            ],
            4 => [
                ["name" => "Laboratorio químico", "description" => "Manejo de materiales y reactivos en el laboratorio."],
                ["name" => "Procesos de síntesis", "description" => "Producción de compuestos químicos a gran escala."],
                ["name" => "Química ambiental", "description" => "Impacto de la industria química en el medio ambiente."],
            ],
            5 => [
                ["name" => "Diseño asistido por computadora (CAD)", "description" => "Creación de planos y modelos digitales."],
                ["name" => "Técnicas de carpintería avanzada", "description" => "Ensamblaje y diseño de muebles personalizados."],
                ["name" => "Gestión de producción", "description" => "Planificación y optimización de la producción en carpintería."],
            ],
        ];

        foreach ($subjects as $study_id => $subjectList) {
            foreach ($subjectList as $subject) {
                DB::table('subjects')->insert([
                    "name" => $subject['name'],
                    "description" => $subject['description'],
                    "study_id" => $study_id,
                ]);
            }
        }
    }
}
