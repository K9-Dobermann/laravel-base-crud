<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cagnolino;
use Faker\Generator as Faker;

$factory->define(Cagnolino::class, function (Faker $faker) {
    return [
        "nome" => $faker -> firstName(),
        "cognome" => $faker -> lastName(),
        "address" => $faker -> address(),
        "code" => $faker -> ipv4(),
        "state" => $faker -> countryCode(),
        "phone_number" => $faker -> e164PhoneNumber(),
        "role" => $faker -> jobTitle()
    ];
});
