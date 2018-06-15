<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'nombre' =>'Juan',
            'apellido' =>'castro',
            'email' =>'juancastro@gmail.com',
            'imagen' =>'https://cdn.icon-icons.com/icons2/1109/PNG/512/1486053614-pinterest_79194.png',
            'nacionalidad' =>'1',
            'password' =>bcrypt('123456')

        ]);
    }
}
