<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Aluno;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        
            return [
                'nome' => $this->faker->firstName,
                'sobrenome' => $this->faker->lastName,
                'data_nascimento' => $this->faker->date,
                'email' => $this->faker->unique()->safeEmail,
                'celular' => $this->faker->unique()->numerify('###########'),
            ];
        }
}
