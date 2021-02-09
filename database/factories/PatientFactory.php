<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\pt_BR\Person as BR;


class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new BR($this->faker));
        $gender = $this->faker->randomElement(['male', 'female']);

        return [
            'name' => $this->faker->name($gender),
            'gender' => $gender,
            'dateBirt' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'document' => $this->faker->rg(false)
        ];
    }
}
