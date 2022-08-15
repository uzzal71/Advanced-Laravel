<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use DB;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'team_id' => function (array $ticket) {
                return DB::table('teams')
                    ->inRandomOrder()
                    ->first()
                    ->id;
            },
        ];
    }
}
