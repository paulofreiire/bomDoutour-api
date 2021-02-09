<?php

namespace Database\Factories;

use App\Models\Consultation;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;


class ConsultationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Consultation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patient_id'=> $this->faker->randomElement(Patient::all()) ,
            'text' => $this->faker->text(400)
        ];
    }
}
