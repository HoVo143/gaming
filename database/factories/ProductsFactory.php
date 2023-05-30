<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->name();
        $slug = Str::slug($name);
        return [
            'name' => $name,
            'price' => $this->faker->numberBetween(100, 99999),
            'discount_price' => $this->faker->numberBetween(100, 99999),
            'image_url' => fake()->imageUrl(),
            'description_1' => $this->faker->text(),
            'description_2' => $this->faker->text(),
            'description_3' => $this->faker->text(),
            'qty' => $this->faker->numberBetween(9, 99),
            'cpu' => $this->faker->text(),
            'ram' => $this->faker->text(),
            'hard_drive' =>$this->faker->text(),
            'graphics_card' => $this->faker->text(),
            'weight' =>$this->faker->text(),
            'screen' => $this->faker->text(),
            'keyboard' => $this->faker->text(),
            'lan' => $this->faker->text(),
            'webcam' => $this->faker->text(),
            'pin' => $this->faker->text(),
            'color' => $this->faker->text(),
            'communication_port' => $this->faker->text(),
            'slug' => $slug,
            'brands_id' => $this->faker->numberBetween(1, 3),
            'product_category_id' => $this->faker->numberBetween(1, 3)
        ];
    }
}
