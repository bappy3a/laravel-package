<?php

namespace Bappy3a\Example\Database\Factories;

use Bappy3a\Example\Models\MyModels;
use Illuminate\Database\Eloquent\Factories\Factory;


class MyModelsFactory extends Factory
{
    protected $model = MyModels::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}

