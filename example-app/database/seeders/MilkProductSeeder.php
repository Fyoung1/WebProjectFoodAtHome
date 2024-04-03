<?php

namespace Database\Seeders;

use App\Models\MilkProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MilkProductSeeder extends Seeder
{
    public function run(): void
    {
        $MilkPrducts= [
            [
                'name' => 'Молоко пастеризованное',
                'price' => 109,
                'description' => '930 мл',
                'image' => 'https://artalix.ru/thumb/2/JzNays-RN3qb8uMcA7l89A/150r150/d/moloko.jpg',
                'calories'=> 40,
            ],
            [
                'name' => 'Йогурт Чудо Клубника',
                'price' => 97,
                'description' => '290 г',
                'image' => 'https://superimageconverter.com/output/2619913.jpg',
                'calories'=> 20,
            ],
            [
                'name' => 'Творожок Чудо персик-груша',
                'price' => 50,
                'description' => '100 г',
                'image' => 'https://superimageconverter.com/output/1200x1200nocrop.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Молоко Домик в деревне',
                'price' => 85,
                'description' => '925 мл',
                'image' => 'https://superimageconverter.com/output/100045549349b0.webp',
                'calories'=> 10,
            ],
            [
                'name' => 'Десерт творожный Чудо',
                'price' => 50,
                'description' => '100 г',
                'image' => 'https://superimageconverter.com/output/2619913.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Масло сливочное 82,5%',
                'price' => 188,
                'description' => '180 г',
                'image' => 'https://superimageconverter.com/output/2e33263133a5c5884db6649efd6104a2.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Сметана Домик в деревне 15%',
                'price' => 66,
                'description' => '300 г',
                'image' => 'https://superimageconverter.com/output/orig_(1).webp',
                'calories'=> 10,
            ],
            [
                'name' => 'Сметана Домик в деревне 15%',
                'price' => 66,
                'description' => '300 г',
                'image' => 'https://superimageconverter.com/output/orig_(1).webp',
                'calories'=> 10,
            ],
            [
                'name' => 'Сметана Домик в деревне 15%',
                'price' => 66,
                'description' => '300 г',
                'image' => 'https://superimageconverter.com/output/orig_(1).webp',
                'calories'=> 10,
            ],
            [
                'name' => 'Сметана Домик в деревне 15%',
                'price' => 66,
                'description' => '300 г',
                'image' => 'https://superimageconverter.com/output/orig_(1).webp',
                'calories'=> 10,
            ],
            ];
        MilkProduct::insert($MilkPrducts);
    }
}
