<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class personajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personajes')->insert([
            'nombre' => 'Jean',
            'descipcion' => 'La Gran Maestra de los Cablleros de Favonius, siempre se ha dedicado religiosamente a sus tareas dentro de la orden y al mantenimiento de la paz en Mondstadt',
            'residencia' => 'Mondstadt'
        ]);
        
        DB::table('personajes')->insert([
            'nombre' => 'Diluc',
            'descipcion' => utf8_encode('Como el hombre m�s rico de Mondstadt, Diluc siempre muestra su lado m�s exquisito. Sin embargo, su verdadera naturaleza es la de un guerrero con una gran determinaci�n'),
            'residencia' => 'Mondstadt'
        ]);
        
        DB::table('personajes')->insert([
            'nombre' => 'Razor',
            'descipcion' => utf8_encode('Algunos dicen que es un hu�rfano criado por lobos. Otros dicen que es un esp�ritu de lobo encarnado en humano.. Con sus garras afiladas y veloz como el viento, Razor vive en armon�a con los lobos y la naturaleza que le rodea'),
            'residencia' => 'Mondstadt'
        ]);
        
        DB::table('personajes')->insert([
            'nombre' => 'Xiao',
            'descipcion' => utf8_encode('Uno de los poderosos e iluminados Adeptus que custodia Liyue. Tambi�n llamado el "Guardi�n Yaksha"'),
            'residencia' => 'Liyue'
        ]);
        
        DB::table('personajes')->insert([
            'nombre' => 'Keching',
            'descipcion' => utf8_encode('El equilibrio terrenal de las Siete Estrellas de Liyue. Tiene su opini�n sobre el gobierno de Rex Lapis en Liyue, pero en realidad, a los dioses les gusta bastante los esc�pticos como ella'),
            'residencia' => 'Liyue'
        ]);
        
        DB::table('personajes')->insert([
            'nombre' => 'Tartaglia',
            'descipcion' => utf8_encode('Es un sujeto imprevisible proveniente de las tierras de Snezhnaya. Detr�s de esa apariencia inocente e infantil, se esconde una m�quina de guerra precisa y perfecta'),
            'residencia' => 'Liyue'
        ]);
    }
}
