<?php

use Faker\Generator as Faker;

$factory->define(App\Submission::class, function (Faker $faker) {
    return [
        'agent_name' => $faker->name,
        'agency_name' => $faker->name,
        'agent_email_address' => $faker->unique()->safeEmail,
        'agent_phone_number' => $faker->phoneNumber,
        'ssn' => $faker->numberBetween($min = 1000000, $max = 9999999),
        'entity_type' => 'individual',
        'lob' => 'HO3',
        'effective_date' => date($format = 'Y-m-d'),
        'expiration_date' => date($format = 'Y-m-d'),
        'named_insured' => $faker->name,
        'additional_ni' => $faker->name,
        'mailing_address_street_name_and_number' => $faker->streetName,
        'mailing_address_city' => $faker->city,
        'mailing_address_county' => $faker->country,
        'mailing_address_zip'       => $faker->postcode,
        'mailing_address_state' => $faker->state,
        'location_address_street_name_and_number' => $faker->streetName,
        'location_address_city'=> $faker->city,
        'location_address_county' => $faker->country,
        'location_address_zip'      => $faker->postcode,
        'location_address_state'     => $faker->state,
        'phone_number'=> $faker->phoneNumber,
        'email_address'    => $faker->unique()->safeEmail,
        'cov_a' =>$faker->numberBetween($min = 100000, $max = 350000),
        'other_structures'=>  $faker->numberBetween($min = 10000, $max = 35000),
        'loss_of_use'=>$faker->numberBetween($min = 2000, $max = 20000),
        'med_pay' => $faker->numberBetween($min = 1000, $max = 5000),
        'aop_ded' =>  $faker->numberBetween($min = 1000, $max = 5000),
         'construction_type' => 'frame',
         'protection_class' => $faker->numberBetween($min = 1, $max = 9),
         'new_purchase'  =>  $faker->numberBetween($min = 0, $max = 1),
         'prior_carrier' =>  $faker->numberBetween($min = 0, $max = 1),
         'prior_carrier_name' => $faker->name,
         'prior_carrier_effective_date' => date($format = 'Y-m-d'),
         'zero_two_losses'      =>  $faker->numberBetween($min = 0, $max = 1),
         'more_than_two_losses' =>  $faker->numberBetween($min = 0, $max = 1),
         'mold' =>  $faker->numberBetween($min = 1000, $max = 5000),
         'mold_limit' =>  $faker->numberBetween($min = 10000, $max = 25000),
         'water_back_up' =>  $faker->numberBetween($min = 1000, $max = 5000),
         'water_back_up_limit' =>  $faker->numberBetween($min = 10000, $max = 25000),
    //     'status' => 'new',
         'submission_number' =>  $faker->numberBetween($min = 100, $max = 55555),
    ];
});
