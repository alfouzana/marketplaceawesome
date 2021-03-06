<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Label;
class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('labels')->insert([
            [
                'rate' => 37.50,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 0,    
            ],
            [
                'rate' => 36.25,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 3750,    
            ],
            [
                'rate' => 35.00,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 7500,    
            ],
            [
                'rate' => 33.75,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 11250,    
            ],
            [
                'rate' => 32.50,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 15000,    
            ],
            [
                'rate' => 31.25,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 18750,    
            ],
            [
                'rate' => 30.00,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 22500,    
            ],
            [
                'rate' => 28.75,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 26250,    
            ],
            [
                'rate' => 27.50,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 30000,    
            ],
            [
                'rate' => 26.25,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 33750,    
            ],
            [
                'rate' => 25.00,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 37500,    
            ],
            [
                'rate' => 23.75,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 41250,    
            ],
            [
                'rate' => 22.50,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 45000,    
            ],
            [
                'rate' => 21.25,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 48750,    
            ],
            [
                'rate' => 20.00,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 52500,    
            ],
            [
                'rate' => 18.75,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 56250,    
            ],
            [
                'rate' => 17.50,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 60000,    
            ],
            [
                'rate' => 16.25,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 63750,    
            ],
            [
                'rate' => 15.00,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 67500,    
            ],
            [
                'rate' => 13.75,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 71250,    
            ],
            [
                'rate' => 12.50,    
                'icon' => 'public/uploads/label/icon/'.'icon-0.png',   
                'amount' => 75000,    
            ],

        ]);
    }
}
