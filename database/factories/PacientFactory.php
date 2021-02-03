<?php

namespace Database\Factories;

use App\Models\Pacient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\pt_BR as Faker;


class PacientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pacient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);

        return [
            'name' => $this->faker->name($gender),
            'gender' => $gender,
            'dateBirt' => date($format = 'Y-m-d', $max = 'now'),
            'document' => $this->faker->rg(false)
        ];
    }
}
