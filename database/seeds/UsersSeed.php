<?php

use Illuminate\Database\Seeder;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++){
            \Illuminate\Support\Facades\DB::table("users")->insertOrIgnore([
                "name" => "test" . $i,
                "email" => "test" . $i . "@gmail.com",
                "password" => \Illuminate\Support\Facades\Hash::make('123')
            ]);
        }
    }
}
