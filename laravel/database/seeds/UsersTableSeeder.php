<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // for ($i=0; $i < 20; $i++) { 
        //     $newUser = new User();
        //     $newUser->name = $faker->name();
        //     $newUser->email = $faker->unique()->email();
        //     $newUser->password = $faker->password();
        //     $newUser->save();
        // }

        $newUser = new User();
        $newUser->name = 'Alessio Calabrese';
        $newUser->email = 'xernas4316@gmail.com';
        $newUser->password = 'Alex4316!';
        $newUser->save();
    }
}
