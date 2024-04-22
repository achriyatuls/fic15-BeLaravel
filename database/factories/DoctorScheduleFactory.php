<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DoctorSchedule>
 */
class DoctorScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'doctor_id'=>\App\Models\Doctor::factory(),
        'day'=>$this->faker->randomElement(['sunday','monday','tuesday','wednesday','thursday','friday','saturday']),
        'time'=>$this->faker->word,
        'status'=>$this->faker->word,
        'note'=>$this->faker->word,

        ];
    }
}
