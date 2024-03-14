<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Category::class;
    public function definition(): array
    {
        return [
            'tenhang'=>$this->faker->name(),
            'donvitinh'=>$this->faker->name(),
            'slnhap' => $this->faker->randomFloat(),
            'gianhap' => $this->faker->randomFloat(),
            'giaban' => $this->faker->randomFloat(),
        ];
    }
}
