<?php

namespace Database\Factories;

use App\Models\Product;
use Facade\FlareClient\Truncation\AbstractTruncationStrategy;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name=$this->faker->unique()->words($nb=4,$asText=true);
        $slug=Str::slug($product_name);
        return [
            'name'=>$product_name,
            'slug'=>$slug,
            'regular_price'=>$this->faker->numberBetween(10,500),
            'quantity'=>$this->faker->numberBetween(100,500),
            'image'=>'digital_' . $this->faker->unique(true)->numberBetween(1,20).'.jpg',
        ];
    }
}
