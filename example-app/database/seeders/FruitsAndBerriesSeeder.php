<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FruitsAndBerries;

class FruitsAndBerriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fruits_and_berries= [
            [
                'name' => 'Мандарины',
                'price' => 65,
                'description' => '500 г',
                'image' => 'https://images.deliveryhero.io/image/pim-glovo/65129edff393d00b6e9b0d5c.jpg?t=W3siYXV0byI6eyJxIjoibG93In19LHsicmVzaXplIjp7IndpZHRoIjoxNTAsImhlaWdodCI6MTUwfX1d',
                'calories'=> 40,
            ],
            [
                'name' => 'Лимоны',
                'price' => 25,
                'description' => '250 г',
                'image' => 'https://223-223.ru/media/products/10/419/987/10419987/resized/150x150_10419987.jpg',
                'calories'=> 20,
            ],
            [
                'name' => 'Яблоко сезонное',
                'price' => 63,
                'description' => '500 г',
                'image' => 'https://223-223.ru/media/products/10/419/997/10419997/resized/150x150_10419997.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Клубника красная',
                'price' => 80,
                'description' => '300 г',
                'image' => 'https://sankt-peterburg.diamondelectric.ru/images/3332/3331289/small_moloko_domik_v_derevne_specialno_otobrannoe_yltrapasterizovannoe_1.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Груши Китайские',
                'price' => 101,
                'description' => '500 г',
                'image' => 'https://cdn-irec.r-99.com/sites/default/files/imagecache/150o/product-images/2264822/z9EB3SIWaXYbz98dNJkKA.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Гранат',
                'price' => 175,
                'description' => '700 г',
                'image' => 'https://i65.shop/upload/resize_cache/iblock/161/170_150_0/dj2ef1mn8x68oqolcv21r7lpe74eknrh.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Помело',
                'price' => 252,
                'description' => '1.4 кг',
                'image' => 'https://метродом.рф/_sh/366/36627m_1.jpg',
                'calories'=> 10,
            ],
        ];
        FruitsAndBerries::insert($fruits_and_berries);
    }
}
