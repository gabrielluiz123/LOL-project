<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\game;


use Illuminate\Http\Request;

class gamesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        set_time_limit(0);
        ini_set('memory_limit', '-1');

        return view('admin-panel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        if($request->t1_champ1_id == $request->t1_champ2_id || $request->t1_champ1_id == $request->t1_champ3_id || $request->t1_champ1_id == $request->t1_champ3_id || $request->t1_champ1_id == $request->t1_champ4_id || $request->t1_champ1_id == $request->t1_champ5_id || $request->t1_champ2_id == $request->t1_champ3_id || $request->t1_champ2_id == $request->t1_champ4_id || $request->t1_champ2_id == $request->t1_champ5_id || $request->t1_champ3_id == $request->t1_champ4_id || $request->t1_champ3_id == $request->t1_champ5_id || $request->t1_champ4_id == $request->t1_champ5_id ||
            $request->t1_champ1_id == $request->t2_champ2_id || $request->t1_champ1_id == $request->t2_champ3_id || $request->t1_champ1_id == $request->t2_champ3_id || $request->t1_champ1_id == $request->t2_champ4_id || $request->t1_champ1_id == $request->t2_champ5_id || $request->t1_champ2_id == $request->t2_champ3_id || $request->t1_champ2_id == $request->t2_champ4_id || $request->t1_champ2_id == $request->t2_champ5_id || $request->t1_champ3_id == $request->t2_champ4_id || $request->t1_champ3_id == $request->t2_champ5_id || $request->t1_champ4_id == $request->t2_champ5_id ||

            $request->t2_champ1_id == $request->t2_champ2_id || $request->t2_champ1_id == $request->t2_champ3_id || $request->t2_champ1_id == $request->t2_champ3_id || $request->t2_champ1_id == $request->t2_champ4_id || $request->t2_champ1_id == $request->t2_champ5_id || $request->t2_champ2_id == $request->t2_champ3_id || $request->t2_champ2_id == $request->t2_champ4_id || $request->t2_champ2_id == $request->t2_champ5_id || $request->t2_champ3_id == $request->t2_champ4_id || $request->t2_champ3_id == $request->t2_champ5_id || $request->t2_champ4_id == $request->t2_champ5_id
            )
        {
            if($request->t1_champ1_spell_1 == $request->t1_champ1_spell_2 || $request->t1_champ2_spell_1 == $request->t1_champ2_spell_2 || $request->t1_champ3_spell_1 == $request->t1_champ3_spell_2 || $request->t1_champ4_spell_1 == $request->t1_champ4_spell_2 || $request->t1_champ5_spell_1 == $request->t1_champ5_spell_2 || $request->t2_champ1_spell_1 == $request->t2_champ1_spell_2 ||  $request->t2_champ2_spell_1 == $request->t2_champ2_spell_2 ||  $request->t2_champ3_spell_1 == $request->t2_champ3_spell_2 ||  $request->t2_champ4_spell_1 == $request->t2_champ4_spell_2 ||  $request->t2_champ5_spell_1 == $request->t2_champ5_spell_2)
            {

                if($request->t1_ban1 == $request->t1_ban2 || $request->t1_ban1 == $request->t1_ban3 || $request->t1_ban1 == $request->t1_ban4 || $request->t1_ban1 == $request->t1_ban5 || $request->t1_ban2 == $request->t1_ban3 || $request->t1_ban2 == $request->t1_ban4 || $request->t1_ban2 == $request->t1_ban5 || $request->t1_ban3 == $request->t1_ban4 || $request->t1_ban3 == $request->t1_ban5 || $request->t1_ban4 == $request->t1_ban5 || 
                    $request->t2_ban1 == $request->t2_ban2 || $request->t2_ban1 == $request->t2_ban3 || $request->t2_ban1 == $request->t2_ban4 || $request->t2_ban1 == $request->t2_ban5 || $request->t2_ban2 == $request->t2_ban3 || $request->t2_ban2 == $request->t2_ban4 || $request->t2_ban2 == $request->t2_ban5 || $request->t2_ban3 == $request->t2_ban4 || $request->t2_ban3 == $request->t2_ban5 || $request->t2_ban4 == $request->t2_ban5 ||
                    $request->t1_ban1 == $request->t2_ban1 || $request->t1_ban1 == $request->t2_ban2 || $request->t1_ban1 == $request->t2_ban3 || $request->t1_ban1 == $request->t2_ban4 || $request->t1_ban1 == $request->t2_ban5 || $request->t1_ban2 == $request->t2_ban1 || $request->t1_ban2 == $request->t2_ban2 || $request->t1_ban2 == $request->t2_ban3 || $request->t1_ban2 == $request->t2_ban4 || $request->t1_ban2 == $request->t2_ban5 || $request->t1_ban3 == $request->t2_ban1 || $request->t1_ban3 == $request->t2_ban2 || $request->t1_ban3 == $request->t2_ban3 || $request->t1_ban3 == $request->t2_ban4 || $request->t1_ban3 == $request->t2_ban5 || $request->t1_ban4 == $request->t2_ban1 || $request->t1_ban4 == $request->t2_ban2 || $request->t1_ban4 == $request->t2_ban3 || $request->t1_ban4 == $request->t2_ban4 || $request->t1_ban4 == $request->t2_ban5 || $request->t1_ban5 == $request->t2_ban1 ||$request->t1_ban5 == $request->t2_ban2 || $request->t1_ban5 == $request->t2_ban3 || $request->t1_ban5 == $request->t2_ban4 || $request->t1_ban5 == $request->t2_ban5)
                {
                game::create([
                'game_duration'     => $request->game_duration, 
                'winner'            => $request->winner,
                'first_blood'       => $request->first_blood,
                'first_tower'       => $request->first_tower, 
                'first_inibitor'    => $request->first_inibitor,
                'first_baron'       => $request->first_baron,
                'first_dragon'      => $request->first_dragon, 
                'first_herald'      => $request->first_herald,
                't1_champ1_id'      => $request->t1_champ1_id,
                't1_champ2_id'      => $request->t1_champ2_id,
                't1_champ3_id'      => $request->t1_champ3_id,
                't1_champ4_id'      => $request->t1_champ4_id,
                't1_champ5_id'      => $request->t1_champ5_id,
                't2_champ1_id'      => $request->t2_champ1_id,
                't2_champ2_id'      => $request->t2_champ2_id,
                't2_champ3_id'      => $request->t2_champ3_id,
                't2_champ4_id'      => $request->t2_champ4_id,
                't2_champ5_id'      => $request->t2_champ5_id,
                't1_champ1_spell_1' => $request->t1_champ1_spell_1,
                't1_champ1_spell_2' => $request->t1_champ1_spell_2,
                't1_champ2_spell_1' => $request->t1_champ2_spell_1,
                't1_champ2_spell_2' => $request->t1_champ2_spell_2,
                't1_champ3_spell_1' => $request->t1_champ3_spell_1,
                't1_champ3_spell_2' => $request->t1_champ3_spell_2,
                't1_champ4_spell_1' => $request->t1_champ4_spell_1,
                't1_champ4_spell_2' => $request->t1_champ4_spell_2,
                't1_champ5_spell_1' => $request->t1_champ5_spell_1,
                't1_champ5_spell_2' => $request->t1_champ5_spell_2,
                't2_champ1_spell_1' => $request->t2_champ1_spell_1,
                't2_champ1_spell_2' => $request->t2_champ1_spell_2,
                't2_champ2_spell_1' => $request->t2_champ2_spell_1,
                't2_champ2_spell_2' => $request->t2_champ2_spell_2,
                't2_champ3_spell_1' => $request->t2_champ3_spell_1,
                't2_champ3_spell_2' => $request->t2_champ3_spell_2,
                't2_champ4_spell_1' => $request->t2_champ4_spell_1,
                't2_champ4_spell_2' => $request->t2_champ4_spell_2,
                't2_champ5_spell_1' => $request->t2_champ5_spell_1,
                't2_champ5_spell_2' => $request->t2_champ5_spell_2,
                't1_ban1'           => $request->t1_ban1,
                't1_ban2'           => $request->t1_ban2,
                't1_ban3'           => $request->t1_ban3,
                't1_ban4'           => $request->t1_ban4,
                't1_ban5'           => $request->t1_ban5,
                't2_ban1'           => $request->t2_ban1,
                't2_ban2'           => $request->t2_ban2,
                't2_ban3'           => $request->t2_ban3,
                't2_ban4'           => $request->t2_ban4,
                't2_ban5'           => $request->t2_ban5,

            ]);
                }
            }
        }


    }

    /**
     * Display the specifirst_dragonfied resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


}
