<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class spell extends Model {

	public $timestamps = false;

	protected $fillable = ['spell_type', 'summoner_level', 'spell_name', 'description'];

	    public function games()
    {
        return $this->belongsTo(game::class,'spell_id');
    }

}
