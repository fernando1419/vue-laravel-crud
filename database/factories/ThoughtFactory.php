<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Thought;
use Faker\Generator as Faker;

$factory->define(Thought::class, function (Faker $faker)
{
	return [
		'description' => $faker->sentence,
		'user_id'     => $faker->numberBetween(1, 5)
	];
});
