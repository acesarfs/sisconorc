<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Conta;
use App\Models\TipoConta;
use App\Models\Area;
use App\Models\User;

class ContaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Conta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$boleanos = ['1','0'];	
        return [
            'id'           => $this->faker->numberBetween($min = 1010, $max = 9000),
            'nome'         => $this->faker->name,
            'email'        => $this->faker->email,
            'numero'       => $this->faker->numberBetween($min = 2030, $max = 2999),
            //'ativo'        => $boleanos[array_rand($boleanos)],
            'ativo'        => $this->faker->boolean,
            'tipoconta_id' => TipoConta::factory()->create()->id,
            'area_id'      => Area::factory()->create()->id,
            'user_id'      => User::factory()->create()->id,
        ];
    }
}
