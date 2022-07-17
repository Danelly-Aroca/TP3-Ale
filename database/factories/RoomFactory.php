<?php

namespace Database\Factories;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
         /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model=Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Numero de habitacion'=>$this->faker->numberBetween($min = 1, $max = 70),
            'Tipo de habitacion'=>$this->faker->randomElement($array = array ('Personal','Doble','Triple','Suit'))
        ];
    }
}