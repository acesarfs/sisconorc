<?php

namespace Database\Factories;

use App\Models\DotOrcamentaria;
use Illuminate\Database\Eloquent\Factories\Factory;

class DotOrcamentariaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DotOrcamentaria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $boleanos = ['1','0'];	
        return [
            'dotacao' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'grupo'=> $this->faker->numberBetween($min = 1000, $max = 9000),
            'descricaogrupo'=> $this->faker->sentence,
            'item'=> $this->faker->numberBetween($min = 1000, $max = 9000),
            'descricaoitem'=> $this->faker->sentence,
            'receita' => $boleanos[array_rand($boleanos)],
        ];
    }
}