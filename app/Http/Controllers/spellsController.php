<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\spell;


class spellController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('spell');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin-panel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        spell::create([
                'spell_id' => $request->spell_type, 
                'summoner_level' => $request->summoner_level,
                'spell_name' => $request->spell_name,
                'description' => $request->description  
            ]);

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $spell = spell::findOrFail($id);  
        return view('spell_edit', compact('spell'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, request $request)
    {
        $spell = spell::findOrFail($id);

        $spell->update([
                'summoner_level' => $request->summoner_level,
                'spell_name' => $request->spell_name,
                'description' => $request->description
            ]);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        $spell = spell::findOrFail($id);

        DB::beginTransaction();
        try
        {
            $spell->delete();

        }
        catch(\Exception $e)
            {
                DB::rollback();

                return redirect('/');
            }    
            
            DB::commit();
            return redirect('/');
        }
        return redirect('/');
    }
    }

}
