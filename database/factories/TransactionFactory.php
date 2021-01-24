<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => 'T_'.$this->faker->numberBetween(100, 999).'_'.$this->faker->regexify('[a-z]{9}'),
            'amount' => $this->faker->randomFloat(2, 1000, 9999),
            'user_id' => $this->faker->numberBetween(100, 9999),
        ];
    }
}
