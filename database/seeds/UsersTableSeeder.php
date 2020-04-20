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
        $user = new \App\User();
        $user->email = "i.babirli@outlook.com";
        $user->password = Hash::make("12345678");
        $user->name="Ismat";
        $user->save();
    }
}
