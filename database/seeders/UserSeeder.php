<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Adan Llanos',
            'email'=>'adanllanos@gmail.com',
            'password'=>bcrypt('12345678')
        ])->assignRole('Admin');

        User::factory(20)->create();
    }
}
