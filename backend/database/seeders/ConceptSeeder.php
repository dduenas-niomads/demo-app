<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ConceptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date("Y-m-d H:i:s");
        $concepts = [
            ['name' => 'API', 'description' => 'Interfaz que permite la comunicación entre aplicaciones.', 'url' => 'https://es.wikipedia.org/wiki/Interfaz_de_programaci%C3%B3n_de_aplicaciones',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'Framework', 'description' => 'Estructura reutilizable para desarrollo de software.', 'url' => 'https://es.wikipedia.org/wiki/Framework',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'MVC', 'description' => 'Patrón de diseño Modelo-Vista-Controlador.', 'url' => 'https://es.wikipedia.org/wiki/Modelo%E2%80%93vista%E2%80%93controlador',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'ORM', 'description' => 'Mapeo de objetos a bases de datos relacionales.', 'url' => 'https://es.wikipedia.org/wiki/Mapeo_objeto-relacional',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'REST', 'description' => 'Arquitectura para servicios web basada en recursos.', 'url' => 'https://es.wikipedia.org/wiki/Representational_State_Transfer',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'SOAP', 'description' => 'Protocolo para intercambio estructurado de información.', 'url' => 'https://es.wikipedia.org/wiki/SOAP',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'JSON', 'description' => 'Formato de datos ligero y legible.', 'url' => 'https://es.wikipedia.org/wiki/JSON',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'XML', 'description' => 'Lenguaje de marcado extensible para datos estructurados.', 'url' => 'https://es.wikipedia.org/wiki/Extensible_Markup_Language',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'Composer', 'description' => 'Gestor de dependencias para PHP.', 'url' => 'https://getcomposer.org',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'NPM', 'description' => 'Gestor de paquetes para JavaScript.', 'url' => 'https://www.npmjs.com',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'Git', 'description' => 'Sistema de control de versiones distribuido.', 'url' => 'https://git-scm.com',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'GitHub', 'description' => 'Plataforma para alojar código usando Git.', 'url' => 'https://github.com',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'CI/CD', 'description' => 'Integración y entrega continua de software.', 'url' => 'https://en.wikipedia.org/wiki/CI/CD',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'Unit Test', 'description' => 'Pruebas automatizadas a unidades de código.', 'url' => 'https://en.wikipedia.org/wiki/Unit_testing',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'Docker', 'description' => 'Contenerización de aplicaciones.', 'url' => 'https://www.docker.com',    'created_at' => $now,
        'updated_at' => $now],
            ['nam   e' => 'Kubernetes', 'description' => 'Orquestación de contenedores.', 'url' => 'https://kubernetes.io',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'PHP', 'description' => 'Lenguaje de programación del lado del servidor.', 'url' => 'https://www.php.net',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'Laravel', 'description' => 'Framework PHP para desarrollo web moderno.', 'url' => 'https://laravel.com',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'Blade', 'description' => 'Motor de plantillas de Laravel.', 'url' => 'https://laravel.com/docs/blade',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'Eloquent', 'description' => 'ORM incluido con Laravel.', 'url' => 'https://laravel.com/docs/eloquent',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'Seeder', 'description' => 'Clase que permite poblar bases de datos con datos.', 'url' => 'https://laravel.com/docs/seeding',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'Migration', 'description' => 'Definición de estructura de base de datos en código.', 'url' => 'https://laravel.com/docs/migrations',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'Middleware', 'description' => 'Filtro que se ejecuta entre la petición y la respuesta.', 'url' => 'https://laravel.com/docs/middleware',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'Controller', 'description' => 'Clase que maneja la lógica de las peticiones HTTP.', 'url' => 'https://laravel.com/docs/controllers',    'created_at' => $now,
        'updated_at' => $now],
            ['name' => 'Route', 'description' => 'Definición de endpoints de la aplicación.', 'url' => 'https://laravel.com/docs/routing',    'created_at' => $now,
        'updated_at' => $now],
        ];

        DB::table('concepts')->insert($concepts);
    }
}
