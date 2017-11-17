<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class champion extends Model
{
	public $timestamps = false;

	protected $fillable = ['champion_id', 'champion_name', 'champion_title', 'champion_function_1', 'champion_function_2'];
        public function games()
    {

        return $this->belongsTo(game::class,'champion_id');
    }
}
