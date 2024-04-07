<?php

namespace Database\Seeders;
use App\Models\VegetablesProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VegetablesProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $VegetablesProducts = [
        [
            'name' => 'Томаты ',
            'price' => 124,
            'description' => '500 г',
            'image' => 'https://img2.tradewheel.com/uploads/images/products/2/4/fresh-indian-tomatoes0-0715564001553739312-150-.jpg.webp',
            'calories'=> 10,
        ],
            [
                'name' => 'Лук ',
                'price' => 50,
                'description' => '500 г',
                'image' => 'https://www.freshmarkets.com.au/wp-content/uploads/2021/05/onion.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Огурцы',
                'price' => 204,
                'description' => '500 г',
                'image' => 'https://agroshop.uz/upload/resize_cache/iblock/971/150_150_2/9712f843dce29c0893c5c0182634930b.jpeg',
                'calories'=> 10,
            ],
            [
                'name' => 'Картофель ',
                'price' => 16,
                'description' => '1 кг',
                'image' => 'https://sun9-17.userapi.com/impf/Y8T87UShxfDgYeTC7zmiQEV9ezLVMH6BL7eJEg/xmOkuUVBNpc.jpg?size=150x150&quality=96&sign=5b078899e70538ac329bab41cd12d0d2&c_uniq_tag=RrG7sRsMKeZZftB4yVLkH74mq6PRVUluSIP6N5YWKYY&type=album',
                'calories'=> 10,
            ],
            [
                'name' => 'Перец красный',
                'price' => 135,
                'description' => '500 г',
                'image' => 'https://i.pinimg.com/736x/a5/da/15/a5da154b4a607fa3077e2cce2127686a.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Свекла ',
                'price' => 10,
                'description' => '500 г',
                'image' => 'https://i65.shop/upload/resize_cache/iblock/ee9/170_150_0/h4d6mvwibdezs0bp0ovc7500gd7j7eod.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Капуста',
                'price' => 105,
                'description' => '3 кг',
                'image' => 'https://semenasibiri.tk/wp-content/uploads/2020/09/kapysta-150x150.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Чеснок ',
                'price' => 35,
                'description' => '100 г',
                'image' => 'https://dwtb.ru/wp-content/uploads/kitai-skii-chesnok6-e1537513362603-150x150.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Авокадо',
                'price' => 100,
                'description' => '250 г',
                'image' => 'https://i.7fon.org/150/z165190.jpg',
                'calories'=> 10,
            ],

        ];
        VegetablesProduct::insert($VegetablesProducts);

    }
}
