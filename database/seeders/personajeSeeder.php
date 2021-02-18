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
            'descipcion' => utf8_encode('Como el hombre más rico de Mondstadt, Diluc siempre muestra su lado más exquisito. Sin embargo, su verdadera naturaleza es la de un guerrero con una gran determinación'),
            'residencia' => 'Mondstadt'
        ]);
        
        DB::table('personajes')->insert([
            'nombre' => 'Razor',
            'descipcion' => utf8_encode('Algunos dicen que es un huérfano criado por lobos. Otros dicen que es un espíritu de lobo encarnado en humano.. Con sus garras afiladas y veloz como el viento, Razor vive en armonía con los lobos y la naturaleza que le rodea'),
            'residencia' => 'Mondstadt'
        ]);
        
        DB::table('personajes')->insert([
            'nombre' => 'Xiao',
            'descipcion' => utf8_encode('Uno de los poderosos e iluminados Adeptus que custodia Liyue. También llamado el "Guardián Yaksha"'),
            'residencia' => 'Liyue'
        ]);
        
        DB::table('personajes')->insert([
            'nombre' => 'Keching',
            'descipcion' => utf8_encode('El equilibrio terrenal de las Siete Estrellas de Liyue. Tiene su opinión sobre el gobierno de Rex Lapis en Liyue, pero en realidad, a los dioses les gusta bastante los escépticos como ella'),
            'residencia' => 'Liyue'
        ]);
        
        DB::table('personajes')->insert([
            'nombre' => 'Tartaglia',
            'descipcion' => utf8_encode('Es un sujeto imprevisible proveniente de las tierras de Snezhnaya. Detrás de esa apariencia inocente e infantil, se esconde una máquina de guerra precisa y perfecta'),
            'residencia' => 'Liyue'
        ]);
    }
}
