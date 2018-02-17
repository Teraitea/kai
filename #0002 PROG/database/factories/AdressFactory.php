<?php

use Faker\Generator as Faker;

$factory->define(App\Adress::class, function (Faker $faker) {
    return [
    'user_id' => $faker->numberBetween(1,3),
    'shipping' => $faker->numberBetween(0,1),
    'billing' => $faker->numberBetween(0,1), 
    'firstname' => $faker->firstName,
    'lastname'=>$faker->firstName,
    'company_name'=>$faker->name,
    'Adress_line_1' => $faker->city,
    'Adress_line_2'=> $faker->country,
    'island_id' => $faker->numberBetween(0,3),
    'city_id' => $faker->numberBetween(0,3),
    'telephone' => $faker->phoneNumber,
    'email' => $faker->email,

    ];
});
