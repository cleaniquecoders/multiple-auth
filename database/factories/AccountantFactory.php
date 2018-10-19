<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Accountant::class, function (Faker $faker) {
    return [
        'accountant_id' => 'ACC' . $faker->randomNumber(5, true),
        'accountant_password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
    ];
});
