<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Молоко',
                'price' => 250,
                'description' => 'lorem ipsum',
                'image' => 'https://artalix.ru/thumb/2/JzNays-RN3qb8uMcA7l89A/150r150/d/moloko.jpg'
            ],
            [
                'name' => 'Яйца',
                'price' => 6,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/i.webp'
            ],
            [
                'name' => 'Вино',
                'price' => 50,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/8TGbjxxGc.jpg'
            ],
            [
                'name' => 'Помидоры',
                'price' => 12,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/ovoshchi_pomidory_belyi_fon_spelye_plody_kapli_vody_svezhest.jpg'
            ],
            [
                'name' => 'Хлеб',
                'price' => 25,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/MN7BcQNyRK5oquZfzFGro18tAiD1j3c1.jpg'
            ],
            [
                'name' => 'Огурцы',
                'price' => 6,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/i.webp'
            ],
            [
                'name' => 'Картофель',
                'price' => 50,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/32577.webp'
            ],
            [
                'name' => 'Яблоки',
                'price' => 12,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/ovoshchi_pomidory_belyi_fon_spelye_plody_kapli_vody_svezhest.jpg'
            ],
            [
                'name' => 'Апельсины',
                'price' => 25,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/kartinki-apelsina-8.jpg'
            ],
            [
                'name' => 'Лимоны',
                'price' => 6,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/1661920955_j-48.jpg'
            ],
            [
                'name' => 'Ананасы',
                'price' => 50,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/orig.webp'
            ],
            [
                'name' => 'Виноград',
                'price' => 12,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/pleven.jpg'
            ],
            [
                'name' => 'Гранат',
                'price' => 50,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/66395600.jpg'
            ],
            [
                'name' => 'Груша',
                'price' => 12,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/груша.jpg'
            ],
            [
                'name' => 'Макароны',
                'price' => 12,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/99761541_4.jpg'
            ],
            [
                'name' => 'Рис',
                'price' => 25,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/RYZ-ARBORIO-1kg-DO-RISOTTO-NATURALNY.jpg'
            ],
            [
                'name' => 'Гречка',
                'price' => 6,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/03098d65d8e649642e5fda018138ed93.jpg'
            ],
            [
                'name' => 'Лук',
                'price' => 50,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/1614577385_23-p-luk-na-belom-fone-24.jpg'
            ],
            [
                'name' => 'Колбаса',
                'price' => 12,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/100027308938b0.webp'
            ],
            [
                'name' => 'Сосиски',
                'price' => 50,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/000177_big_Sosiski-Venskie-vyssh.jpg'
            ],
            [
                'name' => 'Масло сливочное',
                'price' => 12,
                'description' => 'lorem ipsum',
                'image' => 'https://superimageconverter.com/output/1562180_1.jpg'
            ]
        ];
        Product::insert($products);
    }
}
