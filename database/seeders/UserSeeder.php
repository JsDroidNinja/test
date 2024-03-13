<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=[
            'name'=>'varun',
            'email'=>'varunshi123@gmail.com',
            'password'=>Hash::Make('password')
        ];
        User::create($user);
    }
}
