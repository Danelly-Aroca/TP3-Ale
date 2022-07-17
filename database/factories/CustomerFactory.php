<?php

namespace Database\Factories;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
         /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model=Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre'=>$this->faker->name(),
            'Apellido'=>$this->faker->lastName(),
            'Telefono'=>$this->faker->phoneNumber(),
            'Cedula'=>$this->faker->ean13(),
            'Fecha'=>$this->faker->date()
        ];
    }
}
