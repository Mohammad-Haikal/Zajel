<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $material = array("Wood", "Drink", "Sugar", "Souce");
        $images = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

        return [
            'user_id' => 1,
            'contact_number' => $this->faker->phoneNumber(),
            'user_name' => $this->faker->userName(),
            'company_name' => $this->faker->company(),
            'company_email' => $this->faker->companyEmail(),
            'company_address' => $this->faker->address(),
            'from' => $this->faker->city(),
            'to' => $this->faker->city(),
            'receive_address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'material' => $material[array_rand($material)],
            'weight' => 30,
            'size' => 20,
            'takingoff' => $this->faker->date(),
            'arrival' => $this->faker->date(),
            'method' => "Air",
            'price' => 5,
            'image' => "images/books/" . $images[array_rand($images)] . ".jpg",
            'product_description' => $this->faker->realText()
        ];
    }
}
