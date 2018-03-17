<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Admin
        User::create([
        	'name' => 'Eduardo',
        	'email' => 'ed_ramos95@hotmail.com',
        	'password' => bcrypt('elelel'),
        	'role' => 0
        ]);

        //Soporte
        User::create([
        	'name' => 'Delia',
        	'email' => 'delia_lopez01@hotmail.com',
        	'password' => bcrypt('lord660117'),
        	'role' => 1
        ]);

        //Cliente
        User::create([
        	'name' => 'Jonathan',
        	'email' => 'jony_sn04@hotmail.com',
        	'password' => bcrypt('jonathan9211'),
        	'role' => 2
        ]);
    }
}
