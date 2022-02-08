<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CursosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name, 
            'Fecha_ini'=>$this->faker->date,
            'Fecha_fin'=>$this->faker->date,
            'precio'=>$this->faker->numberBetween($min = 1500, $max = 6000),
            'capacidad'=>$this->faker->randomDigit,
            'descripcion'=>$this->faker->text
        ];
    }
}
