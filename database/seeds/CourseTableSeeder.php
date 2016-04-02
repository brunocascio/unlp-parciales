<?php

use Illuminate\Database\Seeder;

use App\Course;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $courses = [
        "Expresión de Problemas y Algoritmos",
        "Conceptos de Organización de Computadoras",
        "Matemática 0",
        "Conceptos de Algoritmos, Datos y Programas",
        "Organización de Computadoras",
        "Matemática 1",
        "Taller de Programación",
        "Arquitectura de Computadoras",
        "Matemática 2",
        "Fundamentos de Organización de Datos",
        "Algoritmos y Estructuras de Datos",
        "Seminario de Lenguajes Ada",
        "Seminario de Lenguajes Delphi",
        "Seminario de Lenguajes C",
        "Seminario de Lenguajes PHP",
        "Seminario de Lenguajes .NET",
        "Seminario de Lenguajes Python",
        "Diseño de Base de Datos",
        "Ingeniería de Software 1",
        "Orientación a Objetos 1",
        "Introducción a los Sistemas Operativos",
        "Taller de lecto-comprensión y traducción en inglés",
        "Matemática 3",
        "Ingeniería de Software 2",
        "Orientación de Objetos 2",
        "Conceptos y Paradigmas de Lenguajes de Programación",
        "Redes y Comunicaciones",
        "Proyecto de Software",
        "Programación Concurrente",
        "Taller de Tecnologías de Producción de Software",
        "Bases de Datos 1",
        "Fundamentos de la teoría de la Computación",
        "Computabilidad y Complejidad",
        "Teoría de la Computación y verificación de programas",
        "Sistemas Operativos",
        "Bases de Datos 2",
        "Ingeniería de Software 3",
        "Sistemas y Organizaciones",
        "Matemática 4",
        "Sistemas Paralelos",
        "Lógica e Inteligencia Artificial",
        "Laboratorio de Software",
        "Programación Distribuida y Tiempo Real",
        "Diseño de Experiencia de Usuario",
        "Desarrollo de software en Sistemas Distribuidos",
        "Aspectos Sociales y Profesionales de Informática",
      ];

      foreach ($courses as $course_name) {
        Course::create(["name" => $course_name]);
      }

    }
}
