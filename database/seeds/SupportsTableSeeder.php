<?php

use Illuminate\Database\Seeder;
use App\User;

class SupportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Soporte
        User::create([
        	'name' => 'Delia',
        	'email' => 'delia_lopez01@hotmail.com',
        	'password' => bcrypt('lord660117'),
        	'role' => 1
        ]);
    }
}
