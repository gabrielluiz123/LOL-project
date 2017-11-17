<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\spell;
use App\champion;
use App\game;



class relatoriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function relatorio_porcentagem()
    {
        set_time_limit(0);
        ini_set('memory_limit', '-1');
        
        $game = game::all();
        return view('relatorio1', compact('game'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function relatorio_winrate_campeao()
    {
        $game = game::all();
        $champion = champion::all();
        $spell = spell::all();

        return view('relatorioWinrateCampeaoView', compact('game', 'champion', 'spell'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function relatorio_ban()
    {
        $game = game::all();
        $champion = champion::al();

        return view('relatorioBanView', compact('game', 'champion'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function relatorio_relacao_ban_winrate($id)
    {
        $game = game::all();
        $champion = champion::all();

        return view('relatorioBanWinrateView', compact('game', 'champion')); 
    }

}
