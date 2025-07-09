<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $now = date("Y-m-d H:i:s");
    $cities = [
        ['name' => 'Nueva York', 'country' => 'Estados Unidos', 'description' => 'Ciudad global conocida por su influencia en finanzas y cultura.'],
        ['name' => 'Londres', 'country' => 'Reino Unido', 'description' => 'Capital del Reino Unido, rica en historia y diversidad.'],
        ['name' => 'Tokio', 'country' => 'Japón', 'description' => 'Ciudad tecnológica con una mezcla de tradición y modernidad.'],
        ['name' => 'París', 'country' => 'Francia', 'description' => 'Ciudad del amor, famosa por la Torre Eiffel y el arte.'],
        ['name' => 'Sídney', 'country' => 'Australia', 'description' => 'Conocida por su ópera y playas icónicas.'],
        ['name' => 'Roma', 'country' => 'Italia', 'description' => 'Capital italiana con impresionante legado histórico.'],
        ['name' => 'Buenos Aires', 'country' => 'Argentina', 'description' => 'Capital argentina con fuerte identidad cultural y tango.'],
        ['name' => 'Ciudad de México', 'country' => 'México', 'description' => 'Una de las ciudades más grandes y diversas del mundo.'],
        ['name' => 'Toronto', 'country' => 'Canadá', 'description' => 'Ciudad multicultural de Canadá con gran calidad de vida.'],
        ['name' => 'Berlín', 'country' => 'Alemania', 'description' => 'Capital alemana con historia, arte y vida nocturna.'],
        ['name' => 'Madrid', 'country' => 'España', 'description' => 'Ciudad española vibrante, cultural y llena de historia.'],
        ['name' => 'Barcelona', 'country' => 'España', 'description' => 'Conocida por Gaudí, la playa y su ambiente artístico.'],
        ['name' => 'Dubai', 'country' => 'Emiratos Árabes Unidos', 'description' => 'Ciudad moderna en el desierto con arquitectura futurista.'],
        ['name' => 'Los Ángeles', 'country' => 'Estados Unidos', 'description' => 'Centro del cine y entretenimiento en EE.UU.'],
        ['name' => 'Chicago', 'country' => 'Estados Unidos', 'description' => 'Ciudad con rascacielos, música y arquitectura icónica.'],
        ['name' => 'San Francisco', 'country' => 'Estados Unidos', 'description' => 'Famosa por el Golden Gate y la tecnología.'],
        ['name' => 'Miami', 'country' => 'Estados Unidos', 'description' => 'Ciudad costera con clima tropical y vida nocturna.'],
        ['name' => 'Vancouver', 'country' => 'Canadá', 'description' => 'Rodeada de naturaleza, muy valorada por su calidad de vida.'],
        ['name' => 'Estambul', 'country' => 'Turquía', 'description' => 'Puente entre Europa y Asia, rica en historia.'],
        ['name' => 'Bangkok', 'country' => 'Tailandia', 'description' => 'Capital tailandesa con templos, comida y caos encantador.'],
        ['name' => 'Seúl', 'country' => 'Corea del Sur', 'description' => 'Ciudad moderna con cultura pop y tradición.'],
        ['name' => 'Pekín', 'country' => 'China', 'description' => 'Capital de China, mezcla de lo imperial y lo moderno.'],
        ['name' => 'Moscú', 'country' => 'Rusia', 'description' => 'Capital rusa, rica en historia y arquitectura.'],
        ['name' => 'El Cairo', 'country' => 'Egipto', 'description' => 'Ciudad egipcia cercana a las famosas pirámides.'],
        ['name' => 'Lima', 'country' => 'Perú', 'description' => 'Capital peruana, conocida por su gastronomía.'],
        ['name' => 'Río de Janeiro', 'country' => 'Brasil', 'description' => 'Ciudad brasileña famosa por el Cristo Redentor.'],
        ['name' => 'Santiago', 'country' => 'Chile', 'description' => 'Capital de Chile, rodeada de montañas.'],
        ['name' => 'Montevideo', 'country' => 'Uruguay', 'description' => 'Capital de Uruguay, tranquila y con gran calidad de vida.'],
        ['name' => 'Lisboa', 'country' => 'Portugal', 'description' => 'Capital de Portugal, con colinas y tranvías históricos.'],
        ['name' => 'Ámsterdam', 'country' => 'Países Bajos', 'description' => 'Ciudad holandesa con canales y bicicletas.'],
        ['name' => 'Oslo', 'country' => 'Noruega', 'description' => 'Capital de Noruega, moderna y rodeada de naturaleza.'],
        ['name' => 'Estocolmo', 'country' => 'Suecia', 'description' => 'Capital sueca construida sobre islas.'],
        ['name' => 'Helsinki', 'country' => 'Finlandia', 'description' => 'Ciudad finlandesa, moderna y funcional.'],
        ['name' => 'Praga', 'country' => 'República Checa', 'description' => 'Ciudad checa con un hermoso centro medieval.'],
        ['name' => 'Budapest', 'country' => 'Hungría', 'description' => 'Capital húngara con puentes sobre el Danubio.'],
        ['name' => 'Varsovia', 'country' => 'Polonia', 'description' => 'Capital de Polonia con historia y renovación.'],
        ['name' => 'Atenas', 'country' => 'Grecia', 'description' => 'Cuna de la civilización occidental.'],
        ['name' => 'Bruselas', 'country' => 'Bélgica', 'description' => 'Centro político de la Unión Europea.'],
        ['name' => 'Dublín', 'country' => 'Irlanda', 'description' => 'Capital de Irlanda, joven y tecnológica.'],
        ['name' => 'Reikiavik', 'country' => 'Islandia', 'description' => 'Capital islandesa, pequeña pero moderna.'],
        ['name' => 'Delhi', 'country' => 'India', 'description' => 'Ciudad densamente poblada y vibrante de India.'],
        ['name' => 'Bombay', 'country' => 'India', 'description' => 'Centro económico y del cine en India.'],
        ['name' => 'Yakarta', 'country' => 'Indonesia', 'description' => 'Capital de Indonesia, enorme y diversa.'],
        ['name' => 'Manila', 'country' => 'Filipinas', 'description' => 'Capital de Filipinas, urbana y costera.'],
        ['name' => 'Teherán', 'country' => 'Irán', 'description' => 'Capital iraní, centro político y cultural.'],
        ['name' => 'Bagdad', 'country' => 'Irak', 'description' => 'Ciudad histórica con gran legado islámico.'],
        ['name' => 'Kabul', 'country' => 'Afganistán', 'description' => 'Capital de Afganistán, con historia milenaria.'],
        ['name' => 'Doha', 'country' => 'Catar', 'description' => 'Moderna capital de Catar en rápido desarrollo.'],
        ['name' => 'Riad', 'country' => 'Arabia Saudita', 'description' => 'Capital de Arabia Saudita, centro económico.'],
                
    ];


    $citiesToInsert = [];
    foreach ($cities as $city) {
        $countryId = DB::table('countries')->where('name', $city['country'])->value('id');
        if ($countryId) {
            $citiesToInsert[] = [
                'name' => $city['name'],
                'description' => $city['description'],
                'country_id' => $countryId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

    }

    DB::table('cities')->insert($citiesToInsert);

    }
}
