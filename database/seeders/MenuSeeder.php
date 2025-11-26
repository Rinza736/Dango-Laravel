<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        Menu::create([
            'name' => 'Салат Цезарь',
            'price' => 450.00,
            'weight' => 300,
            'composition' => 'Куриное филе, салат айсберг, помидоры черри, сухарики, пармезан, соус цезарь',
            'nutritional_value' => json_encode([
                'Калории' => '320 ккал',
                'Белки' => '25 г',
                'Жиры' => '18 г',
                'Углеводы' => '12 г'
            ])
        ]);

        Menu::create([
            'name' => 'Стейк из лосося',
            'price' => 890.00,
            'weight' => 250,
            'composition' => 'Филе лосося, лимон, зелень, оливковое масло',
            'nutritional_value' => json_encode([
                'Калории' => '280 ккал',
                'Белки' => '30 г',
                'Жиры' => '16 г',
                'Углеводы' => '2 г'
            ])
        ]);
    }
}