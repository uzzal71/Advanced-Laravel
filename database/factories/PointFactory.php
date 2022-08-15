<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use DB;

class PointFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => $this->faker->numberBetween(0, 16),
            'ticket_id' => function (array $point) {
                return DB::table('tickets')
                    ->inRandomOrder()
                    ->first()
                    ->id;
            },
            'owner_id' => function (array $point) {
                return DB::table('users')
                    ->inRandomOrder()
                    ->first()
                    ->id;
            },
        ];
    }
}
