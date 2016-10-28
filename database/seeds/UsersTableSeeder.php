<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $password = bcrypt('Poke8112');
            DB::table('users')->insert([
        	'id' => 1,
            'first_name' => 'Brian',
            'middle_initial' => 'C',
            'last_name' => 'Moniz',
            'email' => 'bcm811@gmail.com',
            'password' => $password
        ]);
    }
}
