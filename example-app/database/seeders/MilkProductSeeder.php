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
                'image' => 'https://223-223.ru/media/products/10/419/987/10419987/resized/150x150_10419987.jpg',
                'calories'=> 20,
            ],
            [
                'name' => 'Творожок Чудо персик-груша',
                'price' => 50,
                'description' => '100 г',
                'image' => 'https://223-223.ru/media/products/10/419/997/10419997/resized/150x150_10419997.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Молоко Домик в деревне',
                'price' => 85,
                'description' => '925 мл',
                'image' => 'https://sankt-peterburg.diamondelectric.ru/images/3332/3331289/small_moloko_domik_v_derevne_specialno_otobrannoe_yltrapasterizovannoe_1.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Десерт творожный Чудо',
                'price' => 50,
                'description' => '100 г',
                'image' => 'https://cdn-irec.r-99.com/sites/default/files/imagecache/150o/product-images/2264822/z9EB3SIWaXYbz98dNJkKA.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Масло сливочное 82,5%',
                'price' => 188,
                'description' => '180 г',
                'image' => 'https://i65.shop/upload/resize_cache/iblock/161/170_150_0/dj2ef1mn8x68oqolcv21r7lpe74eknrh.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Сметана Домик в деревне 15%',
                'price' => 66,
                'description' => '300 г',
                'image' => 'https://метродом.рф/_sh/366/36627m_1.jpg',
                'calories'=> 10,
            ],
//            [
//                'name' => 'Сметана Домик в деревне 15%',
//                'price' => 66,
//                'description' => '300 г',
//                'image' => 'https://superimageconverter.com/output/orig_(1).webp',
//                'calories'=> 10,
//            ],
//            [
//                'name' => 'Сметана Домик в деревне 15%',
//                'price' => 66,
//                'description' => '300 г',
//                'image' => 'https://superimageconverter.com/output/orig_(1).webp',
//                'calories'=> 10,
//            ],
//            [
//                'name' => 'Сметана Домик в деревне 15%',
//                'price' => 66,
//                'description' => '300 г',
//                'image' => 'https://superimageconverter.com/output/orig_(1).webp',
//                'calories'=> 10,
//            ],
            ];
        MilkProduct::insert($MilkPrducts);
    }
}
