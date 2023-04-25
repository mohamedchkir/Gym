<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create user without using factory
        $user = new \App\Models\User();
        $user->name = 'admin';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->assignRole('admin');

        // create coach using factory
        \App\Models\User::factory(2)->create()->each(function ($user) {
            $user->assignRole('coach');
        });

        \App\Models\User::factory(10)->create()->each(function ($user) {
            $user->assignRole('user');
        });
    }
}
