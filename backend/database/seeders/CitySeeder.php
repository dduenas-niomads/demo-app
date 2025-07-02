<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date("Y-m-d H:i:s");
        $cities = [
            ['name' => 'Nueva York', 'description' => 'Ciudad global conocida por su influencia en finanzas y cultura.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Londres', 'description' => 'Capital del Reino Unido, rica en historia y diversidad.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tokio', 'description' => 'Ciudad tecnológica con una mezcla de tradición y modernidad.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'París', 'description' => 'Ciudad del amor, famosa por la Torre Eiffel y el arte.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sídney', 'description' => 'Conocida por su ópera y playas icónicas.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Roma', 'description' => 'Capital italiana con impresionante legado histórico.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Buenos Aires', 'description' => 'Capital argentina con fuerte identidad cultural y tango.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ciudad de México', 'description' => 'Una de las ciudades más grandes y diversas del mundo.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Toronto', 'description' => 'Ciudad multicultural de Canadá con gran calidad de vida.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Berlín', 'description' => 'Capital alemana con historia, arte y vida nocturna.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Madrid', 'description' => 'Ciudad española vibrante, cultural y llena de historia.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Barcelona', 'description' => 'Conocida por Gaudí, la playa y su ambiente artístico.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dubai', 'description' => 'Ciudad moderna en el desierto con arquitectura futurista.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Los Ángeles', 'description' => 'Centro del cine y entretenimiento en EE.UU.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chicago', 'description' => 'Ciudad con rascacielos, música y arquitectura icónica.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'San Francisco', 'description' => 'Famosa por el Golden Gate y la tecnología.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Miami', 'description' => 'Ciudad costera con clima tropical y vida nocturna.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Vancouver', 'description' => 'Rodeada de naturaleza, muy valorada por su calidad de vida.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Estambul', 'description' => 'Puente entre Europa y Asia, rica en historia.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bangkok', 'description' => 'Capital tailandesa con templos, comida y caos encantador.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Seúl', 'description' => 'Ciudad moderna con cultura pop y tradición.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pekín', 'description' => 'Capital de China, mezcla de lo imperial y lo moderno.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Moscú', 'description' => 'Capital rusa, rica en historia y arquitectura.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'El Cairo', 'description' => 'Ciudad egipcia cercana a las famosas pirámides.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Lima', 'description' => 'Capital peruana, conocida por su gastronomía.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Río de Janeiro', 'description' => 'Ciudad brasileña famosa por el Cristo Redentor.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Santiago', 'description' => 'Capital de Chile, rodeada de montañas.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Montevideo', 'description' => 'Capital de Uruguay, tranquila y con gran calidad de vida.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Lisboa', 'description' => 'Capital de Portugal, con colinas y tranvías históricos.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ámsterdam', 'description' => 'Ciudad holandesa con canales y bicicletas.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Oslo', 'description' => 'Capital de Noruega, moderna y rodeada de naturaleza.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Estocolmo', 'description' => 'Capital sueca construida sobre islas.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Helsinki', 'description' => 'Ciudad finlandesa, moderna y funcional.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Praga', 'description' => 'Ciudad checa con un hermoso centro medieval.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Budapest', 'description' => 'Capital húngara con puentes sobre el Danubio.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Varsovia', 'description' => 'Capital de Polonia con historia y renovación.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Atenas', 'description' => 'Cuna de la civilización occidental.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bruselas', 'description' => 'Centro político de la Unión Europea.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dublín', 'description' => 'Capital de Irlanda, joven y tecnológica.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Reikiavik', 'description' => 'Capital islandesa, pequeña pero moderna.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Delhi', 'description' => 'Ciudad densamente poblada y vibrante de India.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bombay', 'description' => 'Centro económico y del cine en India.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Yakarta', 'description' => 'Capital de Indonesia, enorme y diversa.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Manila', 'description' => 'Capital de Filipinas, urbana y costera.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Teherán', 'description' => 'Capital iraní, centro político y cultural.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bagdad', 'description' => 'Ciudad histórica con gran legado islámico.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kabul', 'description' => 'Capital de Afganistán, con historia milenaria.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Doha', 'description' => 'Moderna capital de Catar en rápido desarrollo.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Riad', 'description' => 'Capital de Arabia Saudita, centro económico.', 'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('cities')->insert($cities);
    }
}
