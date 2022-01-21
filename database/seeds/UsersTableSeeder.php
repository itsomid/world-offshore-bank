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
        $user = [
            'name'=>'word offshore banks',
            'email'=>'info@worldoffshorebanks.org',
            'is_admin'=>1,
            'password'=>bcrypt('SilverCmi21#'),
        ];
        \App\User::create($user);
    }
}
