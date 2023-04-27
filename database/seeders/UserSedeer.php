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

        // create coach whitout using factory
        $coach = new \App\Models\User();
        $coach->name = 'coach';
        $coach->email = 'coach@mail.com';
        $coach->password = bcrypt('password');
        $coach->save();
        $coach->assignRole('coach');


        // create user whitout using factory
        $user = new \App\Models\User();
        $user->name = 'user';
        $user->email = 'user@mail.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->assignRole('user');

    }
}
