<?php

use Illuminate\Database\Seeder;

class gameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table("games")->insert([
            [
                "game_id"         		=> 1,
                "game_duration"  			=> 123456,
                "winner" 			=> 1,
                "first_blood" => 1,
                "first_tower" => 1, 
                "first_inibitor" => 1, 
                "first_baron" => 0,
                "first_dragon" => 2,
                "first_herald" => 1,
                "t1_champ1_id" => 64,
                "t1_champ1_spell_1" => 9,
                "t1_champ1_spell_2" => 7,
                "t1_champ2_id" => 123,
                "t1_champ2_spell_1" => 4,
                "t1_champ2_spell_2" => 12,
                "t1_champ3_id" => 11,
                "t1_champ3_spell_1" => 3,
                "t1_champ3_spell_1" => 4,
                "t1_champ4_id" => 132,
                "t1_champ4_spell_1" => 3,
                "t1_champ4_spell_2" => 6,
                "t1_champ5_id" => 11,
                "t1_champ5_spell_1" => 3,
                "t1_champ5_spell_1" => 4,
                "t1_tower_kills" => 11,
                "t1_inibitor_kills" => 5,
                "t1_baron_kills" => 0,
                "t1_drag_kills" => 4,
                "t1_herald_kills" => 1,
                "t1_ban1" => 52,
                "t1_ban2" => 43,
                "t1_ban3" => 54,
                "t1_ban4" => 78,
                "t1_ban5" => 80,

                "t2_champ1_id" => 65,
                "t2_champ1_spell_1" => 10,
                "t2_champ1_spell_2" =>	90,
                "t2_champ2_id" => 126,
                "t2_champ2_spell_1" => 4,
                "t2_champ2_spell_2" => 12,
                "t2_champ3_id" => 110,
                "t2_champ3_spell_1" => 3,
                "t2_champ3_spell_1" => 4,
                "t2_champ4_id" => 132,
                "t2_champ4_spell_1" => 3,
                "t2_champ4_spell_2" => 6,
                "t2_champ5_id" => 11,
                "t2_champ5_spell_1" => 3,
                "t2_champ5_spell_1" => 4,
                "t2_tower_kills" => 4,
                "t2_inibitor_kills" => 1,
                "t2_baron_kills" => 0,
                "t2_drag_kills" => 1,
                "t2_herald_kills" => 0,
                "t2_ban1" => 42,
                "t2_ban2" => 73,
                "t2_ban3" => 184,
                "t2_ban4" => 28,
                "t2_ban5" => 86,

            ],
        ]);

         DB::table("games")->insert([
            [
                "game_id"         		=> 2,
                "game_duration"  			=> 423456,
                "winner" 			=> 2,
                "first_blood" => 1,
                "first_tower" => 2, 
                "first_inibitor" => 2, 
                "first_baron" => 2,
                "first_dragon" => 1,
                "first_herald" => 2,
                "t1_champ1_id" => 64,
                "t1_champ1_spell_1" => 9,
                "t1_champ1_spell_2" => 7,
                "t1_champ2_id" => 123,
                "t1_champ2_spell_1" => 4,
                "t1_champ2_spell_2" => 12,
                "t1_champ3_id" => 11,
                "t1_champ3_spell_1" => 3,
                "t1_champ3_spell_1" => 4,
                "t1_champ4_id" => 132,
                "t1_champ4_spell_1" => 3,
                "t1_champ4_spell_2" => 6,
                "t1_champ5_id" => 11,
                "t1_champ5_spell_1" => 3,
                "t1_champ5_spell_1" => 4,
                "t1_tower_kills" => 5,
                "t1_inibitor_kills" => 1,
                "t1_baron_kills" => 0,
                "t1_drag_kills" => 1,
                "t1_herald_kills" => 0,
                "t1_ban1" => 52,
                "t1_ban2" => 43,
                "t1_ban3" => 54,
                "t1_ban4" => 78,
                "t1_ban5" => 80,

                "t2_champ1_id" => 65,
                "t2_champ1_spell_1" => 10,
                "t2_champ1_spell_2" =>	90,
                "t2_champ2_id" => 126,
                "t2_champ2_spell_1" => 4,
                "t2_champ2_spell_2" => 12,
                "t2_champ3_id" => 110,
                "t2_champ3_spell_1" => 3,
                "t2_champ3_spell_1" => 4,
                "t2_champ4_id" => 132,
                "t2_champ4_spell_1" => 3,
                "t2_champ4_spell_2" => 6,
                "t2_champ5_id" => 11,
                "t2_champ5_spell_1" => 3,
                "t2_champ5_spell_1" => 4,
                "t2_tower_kills" => 10,
                "t2_inibitor_kills" => 8,
                "t2_baron_kills" => 1,
                "t2_drag_kills" => 4,
                "t2_herald_kills" => 1,
                "t2_ban1" => 42,
                "t2_ban2" => 73,
                "t2_ban3" => 184,
                "t2_ban4" => 28,
                "t2_ban5" => 86,

            ],
        ]);

           DB::table("games")->insert([
            [
                "game_id"         		=> 3,
                "game_duration"  			=> 523456,
                "winner" 			=> 1,
                "first_blood" => 1,
                "first_tower" => 1, 
                "first_inibitor" => 1, 
                "first_baron" => 2,
                "first_dragon" => 1,
                "first_herald" => 1,
                "t1_champ1_id" => 64,
                "t1_champ1_spell_1" => 9,
                "t1_champ1_spell_2" => 7,
                "t1_champ2_id" => 123,
                "t1_champ2_spell_1" => 4,
                "t1_champ2_spell_2" => 12,
                "t1_champ3_id" => 11,
                "t1_champ3_spell_1" => 3,
                "t1_champ3_spell_1" => 4,
                "t1_champ4_id" => 132,
                "t1_champ4_spell_1" => 3,
                "t1_champ4_spell_2" => 6,
                "t1_champ5_id" => 11,
                "t1_champ5_spell_1" => 3,
                "t1_champ5_spell_1" => 4,
                "t1_tower_kills" => 10,
                "t1_inibitor_kills" => 4,
                "t1_baron_kills" => 1,
                "t1_drag_kills" => 4,
                "t1_herald_kills" => 1,
                "t1_ban1" => 52,
                "t1_ban2" => 43,
                "t1_ban3" => 54,
                "t1_ban4" => 78,
                "t1_ban5" => 80,

                "t2_champ1_id" => 65,
                "t2_champ1_spell_1" => 10,
                "t2_champ1_spell_2" =>	90,
                "t2_champ2_id" => 126,
                "t2_champ2_spell_1" => 4,
                "t2_champ2_spell_2" => 12,
                "t2_champ3_id" => 110,
                "t2_champ3_spell_1" => 3,
                "t2_champ3_spell_1" => 4,
                "t2_champ4_id" => 132,
                "t2_champ4_spell_1" => 3,
                "t2_champ4_spell_2" => 6,
                "t2_champ5_id" => 11,
                "t2_champ5_spell_1" => 3,
                "t2_champ5_spell_1" => 4,
                "t2_tower_kills" => 4,
                "t2_inibitor_kills" => 0,
                "t2_baron_kills" => 0,
                "t2_drag_kills" => 1,
                "t2_herald_kills" => 0,
                "t2_ban1" => 42,
                "t2_ban2" => 73,
                "t2_ban3" => 184,
                "t2_ban4" => 28,
                "t2_ban5" => 86,

            ],
        ]);
    }
}