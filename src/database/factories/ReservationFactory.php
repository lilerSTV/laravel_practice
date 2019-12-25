<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Reservation;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        //
        'room_name' => $faker->Reservation($faker->numberBetween(10,25)),
        'checkin' =>$faker->Reservation($faker->numberBetween(50,200)),
        'checkout' =>$faker->Reservation($faker->numberBetween(50,200))
    ];
});
