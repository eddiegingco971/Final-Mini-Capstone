<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $users = [
            [
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('password'),
                'role_as'=> '1', //admin
            ],
            [
                'name' => 'Eddie Gingco',
                'email' => 'eddiegingco@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('password'),
                'role_as'=> '0', //user
            ],

        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
