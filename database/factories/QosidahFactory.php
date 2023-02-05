<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class QosidahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'title_latin' => $this->faker->randomElement(['Laa ila ha illallah', 'Subhanallah Walhamdulillah', 'Shollallohu ala muhammad']),
            'title_translate' => $this->faker->randomElement(['Tiada Tuhan selain Allah', 'Maha Suci Allah', 'Sholawat dan salam kepada Kekasih Nabi Muhammad SAW']),
            'user_id' => User::all()->random()->id
        ];
    }
}
