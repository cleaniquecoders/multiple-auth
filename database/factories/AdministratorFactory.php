<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Administrator::class, function (Faker $faker) {
    return [
        'administrator_id' => 'ADM' . $faker->randomNumber(5, true),
        'administrator_password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
    ];
});
