<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\champion;
use App\game;

class championsController extends Controller
{


    public function create()
    {
        set_time_limit(0);
        ini_set('memory_limit', '-1');
        
        $arquivo = file_get_contents('C:\Users\Gabriel\Desktop\league-of-legends\summoner_spell_info.json');
        $json = json_decode($arquivo);
        $cont = 0;

        foreach($json as  $registro):
                spell::create([
                       'spell_type'           => $registro->key,
                       'summoner_level'         => $registro->summonerLevel,
                       'spell_name'        => $registro->name,
                        'description'   => $registro->description
                    ]);
               endforeach;
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
