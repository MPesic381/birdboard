<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User')->create([
            'name' => 'Miomir',
            'email' => 'pesicmiomir@gmail.com',
            'password' => Hash::make('leskovac123')
        ]);
    }
}
