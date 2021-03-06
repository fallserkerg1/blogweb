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

        User::create([
            'name' => 'Yoshua Soto',
            'email' => 'yoshuasoto54@gmail.com',
            'password' => bcrypt('admin12345')

        ])->assignRole('Admin');;

        User::factory(9)->create();

    }
}
