<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
      public function run()
    {
         DB::table("users")->insert([
            [
                "id"         		=> 1,
                "email"  			=> "gabriel@gmail.com",
                "password" 			=> bcrypt(123456),
            ],
        ]);
    }
}
