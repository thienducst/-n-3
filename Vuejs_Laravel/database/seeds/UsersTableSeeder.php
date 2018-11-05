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
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) { 
        	DB::table('users')->insert([
        		'name' => $faker->name,
        		'email' => $faker->email,
        		'password' => bcrypt('123456'),
        	]);
        }
    }
}
