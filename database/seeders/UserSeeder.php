<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>'Vicente Antonio Juan Magallanes',
            'email'=>'vicenteajm@hotmail.com',
            'password'=>bcrypt('21419446')
        ])->assignRole('Admin');
        User::factory(9)->create();
    }
}
