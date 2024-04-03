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
            'image' => 'https://superimageconverter.com/output/ovoshchi_pomidory_belyi_fon_spelye_plody_kapli_vody_svezhest.jpg',
            'calories'=> 10,
        ],
            [
                'name' => 'Лук ',
                'price' => 50,
                'description' => '500 г',
                'image' => 'https://superimageconverter.com/output/1614577385_23-p-luk-na-belom-fone-24.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Огурцы',
                'price' => 204,
                'description' => '500 г',
                'image' => 'https://superimageconverter.com/output/ogurcy.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Картофель ',
                'price' => 16,
                'description' => '1 кг',
                'image' => 'https://superimageconverter.com/output/32577.webp',
                'calories'=> 10,
            ],
            [
                'name' => 'Перец красный',
                'price' => 135,
                'description' => '500 г',
                'image' => 'https://superimageconverter.com/output/525343H.png',
                'calories'=> 10,
            ],
            [
                'name' => 'Свекла ',
                'price' => 10,
                'description' => '500 г',
                'image' => 'https://superimageconverter.com/output/eteoazpgk5p6ld0nepewbrjoknloudce.webp',
                'calories'=> 10,
            ],
            [
                'name' => 'Капуста',
                'price' => 105,
                'description' => '3 кг',
                'image' => 'https://superimageconverter.com/output/lahana.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Чеснок ',
                'price' => 35,
                'description' => '100 г',
                'image' => 'https://superimageconverter.com/output/30a23ab368cd7190b1eb41df321a8fcb.jpg',
                'calories'=> 10,
            ],
            [
                'name' => 'Авокадо',
                'price' => 100,
                'description' => '250 г',
                'image' => 'https://superimageconverter.com/output/1614589391_12-p-avokado-na-belom-fone-18.jpg',
                'calories'=> 10,
            ],

        ];
        VegetablesProduct::insert($VegetablesProducts);

    }
}
