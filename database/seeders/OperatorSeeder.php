<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Operator;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //using factory to create 10 random operator
        // [OperatorFactory](../factories/OperatorFactory) 
        Operator::factory()->count(10)->create();
    }
}
