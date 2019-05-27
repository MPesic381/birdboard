<?php

use App\User;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Project')->create([
            'user_id' => User::whereName('Miomir')->first()->id
        ]);

        factory('App\Project', 5)->create();
    }
}
