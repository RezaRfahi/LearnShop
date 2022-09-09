<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase>
 */
class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $course_id = Course::all()->random()->id;

        return [
            'serial_number' => fake()->buildingNumber,
            'user_id' => User::all()->random()->id,
            'course_id' => $course_id,
            'amount' => Course::query()->where('id', '=', $course_id)->first()->price,
        ];
    }
}
