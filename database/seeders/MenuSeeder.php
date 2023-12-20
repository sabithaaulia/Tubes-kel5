<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for($i = 0; $i <10; $i++){
            Menu::create([
                'nama_menu'=>$faker->words(2, true),
                'satuan'=> '1 porsi',
                'harga'=>$faker->numberBetween(5000, 40000),
                'jumlah'=>$faker->numberBetween(1,4),
            ]);
        }
    }
}
