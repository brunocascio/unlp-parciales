<?php

use Illuminate\Database\Seeder;

use App\Teacher;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $teachers = [
        "Lic. Banchoff Tzancoff, Claudia",
        "Lic. Baum, Gabriel ",
        "Mg. Bazán, Patrícia ",
        "Mg.  Bertone, Rodolfo ",
        "Ing. De Giusti, Armando ",
        "Dra. Díaz, Alicia ",
        "Lic. Díaz, Javier ",
        "Dra. Gordillo, Silvia",
        "Lic. Lanzarini, Laura ",
        "Ing. Marrone, Luis ",
        "Dr.  Naiouf, Marcelo",
        "Lic. Pesado Patricia",
        "Lic. Queiruga, Claudia ",
        "Lic. Rodríguez, María Begoña ",
        "Dr.  Rossi, Gustavo",
        "Dra. Sanz, Cecilia ",
        "Lic. Schiavoni, Maria Alejandra",
        "Esp. Madoz, María Cristina",
        "Mg.  Molinari, Lía",
        "Lic. Perichinsky, Gregorio",
        "Dr. Tinetti, Fernando",
        "Prof. Lema, Nelba",
        "Ing. Villagarcía Wanza, Horacio",
        "Lic. Bibbo, Luis Mariano",
        "Lic. Chichizola, Franco",
        "Dra. De Giusti, Laura ",
        "Mg. Esponda, Silvia ",
        "Lic. Fava, Laura",
        "Dr.  Fernández, Alejandro    ",
        "Mg. Giacomantone, Javier ",
        "Dra. Giandini, Roxana",
        "Esp. Gorga, Gladys    ",
        "Lic. Harari, Ivana",
        "Lic. Harari, Viviana",
        "Ing. Montezanti, Diego",
        "Dra. Mostaccio, Catalina",
        "Mg. Pasini, Ariel",
        "Dra. Pons, Claudia",
        "Mg. Romero, Fernando",
        "Lic. Venosa, Paula",
        "Lic. Amadeo, Ana",
        "Lic. Boracchia, Marcos",
        "Lic. Lanfranco, Einar",
        "Prof. Ungaro, Ana Maria",
        "Mg. Zangara, Maria Alejandra",
        "Dra. Abasolo, María José",
        "Lic. Ainchil, María Virginia",
        "Lic. Barbieri, Andrés",
        "Mg.  Bazzocco Javier",
        "Ing. Bellavita, Jorge",
        "MSc. Bría, Oscar",
        "Ing. Castro, Néstor",
        "Lic. Champredonde, Raúl ",
        "Lic. Corbalan, Leonardo",
        "Lic. Cristina, Federico",
        "Mg.  D'Agostino, Sandra",
        "Lic. Dapoto, Sebastián",
        "Ing. De Giusti, Marisa",
        "Dr.  García Martínez, Ramón",
        "Dra. Garrido, Alejandra",
        "Mg.  Gonzalez, Alejandro",
        "Abg. Iglesias, Gonzalo",
        "Ing. Lorenzón, Emilio ",
        "Lic. Luengo, Miguel",
        "Lic. Macia, Nicolás",
        "Lic. Marrero, Luciano ",
        "C.C. Oldani, Marcelo ",
        "Ing. Orellana, Enrique",
        "Lic. Perez, Juan Pablo ",
        "Lic. Piccirilli, Darío ",
        "Lic. Rodriguez, Christian",
        "MSc. Rosenfeld, Ricardo ",
        "Ing. Runco, Jorge",
        "Dr.  Simonelli, Fausto",
        "Dra. Smith, Clara",
        "Mg.  Thomas, Pablo ",
        "Ing. Walas Mateo, Federico"
      ];

      foreach ($teachers as $teacher_name) {
        Teacher::create(['name' => $teacher_name]);
      }

    }
}
