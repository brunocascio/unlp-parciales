<?php

use Illuminate\Database\Seeder;

use App\Course;
use App\Career;

class CourseCareerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $lic_sistemas_id = Career::where(
        'name', 'Licenciatura en Sistemas'
      )->first()->id;

      $lic_informatica_id = Career::where(
        'name', 'Licenciatura en Informática'
      )->first()->id;

      $analista_id = Career::where(
        'name', 'Analista Programador Universitario'
      )->first()->id;

      // Comunes para las 3 materias
      $commons_courses = [
        Course::where(["name" => "Expresión de Problemas y Algoritmos"])->first()->id,
        Course::where(["name" => "Conceptos de Organización de Computadoras"])->first()->id,
        Course::where(["name" => "Matemática 0"])->first()->id,
        Course::where(["name" => "Conceptos de Algoritmos, Datos y Programas"])->first()->id,
        Course::where(["name" => "Organización de Computadoras"])->first()->id,
        Course::where(["name" => "Matemática 1"])->first()->id,
        Course::where(["name" => "Taller de Programación"])->first()->id,
        Course::where(["name" => "Arquitectura de Computadoras"])->first()->id,
        Course::where(["name" => "Matemática 2"])->first()->id,
        Course::where(["name" => "Fundamentos de Organización de Datos"])->first()->id,
        Course::where(["name" => "Algoritmos y Estructuras de Datos"])->first()->id,
        Course::where(["name" => "Seminario de Lenguajes Ada"])->first()->id,
        Course::where(["name" => "Seminario de Lenguajes Delphi"])->first()->id,
        Course::where(["name" => "Seminario de Lenguajes C"])->first()->id,
        Course::where(["name" => "Seminario de Lenguajes PHP"])->first()->id,
        Course::where(["name" => "Seminario de Lenguajes .NET"])->first()->id,
        Course::where(["name" => "Seminario de Lenguajes Python"])->first()->id,
        Course::where(["name" => "Diseño de Base de Datos"])->first()->id,
        Course::where(["name" => "Ingeniería de Software 1"])->first()->id,
        Course::where(["name" => "Orientación a Objetos 1"])->first()->id,
        Course::where(["name" => "Introducción a los Sistemas Operativos"])->first()->id,
        Course::where(["name" => "Taller de lecto-comprensión y traducción en inglés"])->first()->id,
        Course::where(["name" => "Matemática 3"])->first()->id,
        Course::where(["name" => "Ingeniería de Software 2"])->first()->id,
        Course::where(["name" => "Orientación de Objetos 2"])->first()->id,
        Course::where(["name" => "Proyecto de Software"])->first()->id,
        Course::where(["name" => "Programación Concurrente"])->first()->id,
      ];

      foreach ($commons_courses as $course_id) {
        DB::table('careers_courses')->insert([
          [ 'career_id' => $lic_sistemas_id, 'course_id' => $course_id ],
          [ 'career_id' => $lic_informatica_id, 'course_id' => $course_id ],
          [ 'career_id' => $analista_id, 'course_id' => $course_id ],
        ]);
      }

      // Comunes para Analista
      DB::table('careers_courses')->insert([
        'career_id' => $analista_id,
        'course_id' => Course::where(["name" => "Taller de Tecnologías de Producción de Software"])->first()->id
      ]);

      // Comunes para las Lics
      $commons_lics = [
        Course::where(["name" => "Conceptos y Paradigmas de Lenguajes de Programación"])->first()->id,
        Course::where(["name" => "Redes y Comunicaciones"])->first()->id,
        Course::where(["name" => "Fundamentos de la teoría de la Computación"])->first()->id,
        Course::where(["name" => "Sistemas Operativos"])->first()->id,
        Course::where(["name" => "Matemática 4"])->first()->id,
        Course::where(["name" => "Aspectos Sociales y Profesionales de Informática"])->first()->id,
      ];

      foreach ($commons_lics as $course_id) {
        DB::table('careers_courses')->insert([
          [ 'career_id' => $lic_sistemas_id, 'course_id' => $course_id ],
          [ 'career_id' => $lic_informatica_id, 'course_id' => $course_id ]
        ]);
      }

      // Sólo de Lic en Sistemas
      $commons_lic_sistemas = [
        Course::where(["name" => "Bases de Datos 1"])->first()->id,
        Course::where(["name" => "Bases de Datos 2"])->first()->id,
        Course::where(["name" => "Ingeniería de Software 3"])->first()->id,
        Course::where(["name" => "Sistemas y Organizaciones"])->first()->id,
        Course::where(["name" => "Desarrollo de software en Sistemas Distribuidos"])->first()->id,
      ];

      foreach ($commons_lic_sistemas as $course_id) {
        DB::table('careers_courses')->insert([
          [ 'career_id' => $lic_sistemas_id, 'course_id' => $course_id ],
        ]);
      }

      // Sólo de Lic en Informatica
      $commons_lic_informatica = [
        Course::where(["name" => "Computabilidad y Complejidad"])->first()->id,
        Course::where(["name" => "Teoría de la Computación y verificación de programas"])->first()->id,
        Course::where(["name" => "Sistemas Paralelos"])->first()->id,
        Course::where(["name" => "Lógica e Inteligencia Artificial"])->first()->id,
        Course::where(["name" => "Laboratorio de Software"])->first()->id,
        Course::where(["name" => "Programación Distribuida y Tiempo Real"])->first()->id,
        Course::where(["name" => "Diseño de Experiencia de Usuario"])->first()->id,
      ];

      foreach ($commons_lic_informatica as $course_id) {
        DB::table('careers_courses')->insert([
          [ 'career_id' => $lic_informatica_id, 'course_id' => $course_id ],
        ]);
      }

    }
}
