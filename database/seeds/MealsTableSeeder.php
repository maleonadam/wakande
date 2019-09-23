<?php

use Illuminate\Database\Seeder;
use App\Meal;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meal::create([
            'meal_name' => 'Rice Beef',
            'image' => 'me',
            'meal_price' => '250.00',
            'meal_description' => 'Very tasty and mouth watering.',
        ]);

        Meal::create([
            'meal_name' => 'Rice Beans',
            'image' => 'me1',
            'meal_price' => '230.00',
            'meal_description' => 'Very tasty and mouth watering.',
        ]);

        Meal::create([
            'meal_name' => 'Rice Ndengu',
            'image' => 'me2',
            'meal_price' => '230.00',
            'meal_description' => 'Very tasty and mouth watering.',
        ]);

        Meal::create([
            'meal_name' => 'Chapati Beef',
            'image' => 'me3',
            'meal_price' => '250.00',
            'meal_description' => 'Very tasty and mouth watering.',
        ]);

        Meal::create([
            'meal_name' => 'Chapati Beans',
            'image' => 'me4',
            'meal_price' => '230.00',
            'meal_description' => 'Very tasty and mouth watering.',
        ]);

        Meal::create([
            'meal_name' => 'Chapati Ndengu',
            'image' => 'me5',
            'meal_price' => '230.00',
            'meal_description' => 'Very tasty and mouth watering.',
        ]);

        Meal::create([
            'meal_name' => 'Pilau Beef',
            'image' => 'me6',
            'meal_price' => '250.00',
            'meal_description' => 'Very tasty and mouth watering.',
        ]);

        Meal::create([
            'meal_name' => 'Pilau Beans',
            'image' => 'me7',
            'meal_price' => '230.00',
            'meal_description' => 'Very tasty and mouth watering.',
        ]);

        Meal::create([
            'meal_name' => 'Pilau Ndengu',
            'image' => 'me8',
            'meal_price' => '230.00',
            'meal_description' => 'Very tasty and mouth watering.',
        ]);
    }
}
