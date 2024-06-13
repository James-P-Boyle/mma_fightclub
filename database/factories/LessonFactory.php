<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lesson_name' => $this->faker->word,
            'lesson_time' => Carbon::now()->addDays(rand(1, 30)),
        ];
    }
}
/*
       $table->id();
            $table->string('class_name');
            $table->timestamp('class_time');
            $table->timestamps();
*/
