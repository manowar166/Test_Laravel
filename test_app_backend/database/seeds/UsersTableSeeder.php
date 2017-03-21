<?php

use App\User;
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
        $user = new User();
        $user->name = 'manowar166';
        $user->email = 'manowar166@mail.ru';
        $user->password = bcrypt('1234567');
        $user->save();
    }
}
