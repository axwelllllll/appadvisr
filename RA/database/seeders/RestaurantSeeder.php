<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('restaurants')->insert([
            'name' => "McDonald's",
            'description' => "Chaîne emblématique de restauration rapide proposant des menus de burgers-frites, des desserts et milk-shakes.",
            'grade' => 3.2,
            'localization' => "Angle Avenue Maurice Berteaux et, Rue de la Convention, 78500 Sartrouville",
            'phone_number' => " 01 39 68 14 14",
            'website' => "macdo.fr",
            'hour' => "11AM-9:30M",
        ]);
    }
}
