<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kategori_produk' => $this->faker->randomElement(['Baju', 'Celana', 'Outer']),
            'nama_produk' => $this->faker->firstNameMale,
            'stok' => $this->faker->numberBetween(10, 100),
            'harga_produk' => $this->faker->numberBetween(10000,150000),
        ];
    }
}
