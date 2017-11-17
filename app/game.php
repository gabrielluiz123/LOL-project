<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class game extends Model {

	public $timestamps = false;

	 protected $fillable = [
	
	 			'game_id',
                'game_duration',
                'winner', 
                'first_blood',  
                'first_tower',  
                'first_inibitor',
                'first_baron',	  
                'first_dragon', 
                'first_herald' ,
                't1_champ1_id' ,
                't1_champ1_spell_1',
                't1_champ1_spell_2',
                't1_champ2_id' ,
                't1_champ2_spell_1',
                't1_champ2_spell_2',
                't1_champ3_id' ,
                't1_champ3_spell_1',
                't1_champ3_spell_2',
                't1_champ4_id' ,
                't1_champ4_spell_1',
                't1_champ4_spell_2',
                't1_champ5_id' ,
                't1_champ5_spell_1',
                't1_champ5_spell_2',
                't1_tower_kills',
                't1_inibitor_kills',
                't1_baron_kills',
                't1_drag_kills',
                't1_herald_kills'  ,
                't1_ban1', 
                't1_ban2',
                't1_ban3',
                't1_ban4',
                't1_ban5',
                't2_champ1_id' ,
                't2_champ1_spell_1',
                't2_champ1_spell_2',
                't2_champ2_id' ,
                't2_champ2_spell_1',
                't2_champ2_spell_2',
                't2_champ3_id' ,
                't2_champ3_spell_1',
                't2_champ3_spell_2',
                't2_champ4_id' ,
                't2_champ4_spell_1',
                't2_champ4_spell_2',
                't2_champ5_id' ,
                't2_champ5_spell_1',
                't2_champ5_spell_2',
                't2_tower_kills',
                't2_inibitor_kills',
                't2_baron_kills',
                't2_drag_kills',
                't2_herald_kills'  ,
                't2_ban1', 
                't2_ban2',
                't2_ban3',
                't2_ban4',
                't2_ban5'

	 ];

	    public function spells()
    {
        return $this->hasMany(spell::class,'spell_id');
    }

}
