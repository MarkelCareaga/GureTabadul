<?php

namespace Database\Factories;

use App\Models\Taller;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TalleresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Taller::class;

    public function definition()
    {
        
        return [
            'Título'=>$this->faker->name , 
            'Fecha_comienzo'=>$this->faker->date,
            'Fecha_final'=>$this->faker->date,
            'Descripción'=>$this->faker->text,
            'Precio'=>$this->faker->numberBetween($min = 1500, $max = 6000),
            'Capacidad'=>$this->faker->randomDigit
        ];
    }
}
