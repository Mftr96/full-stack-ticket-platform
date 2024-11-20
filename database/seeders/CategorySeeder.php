<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // creating manually three categories 
        $categoryMobile= new Category();
        $categoryMobile->name="assistenza mobile";
        $categoryMobile->save();

        $categoryPc= new Category();
        $categoryPc->name="assistenza pc";
        $categoryPc->save();


        $categoryTablet= new Category();
        $categoryTablet->name="assistenza tablet";
        $categoryTablet->save();

    }
}
