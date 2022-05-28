<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Guide::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email' => $faker->email,
        'password'=>$faker->password,
        'phone'=>$faker->phoneNumber,
        'birthday'=>$faker->date,
        'gender'=>$faker->randomElement(['male', 'female']),
        'city'=>$faker->city,
        'price'=>$faker->numberBetween($min = 1500, $max = 6000),

    ];
});
