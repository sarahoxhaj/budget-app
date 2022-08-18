<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            ['name' => 'Food & Beverages',],
            ['name' => 'Transportation',],
            ['name' => 'Rentals'],
            ['name' => 'Bills'],
            ['name' => 'Education'],
            ['name' => 'Others'],

        ]);
    }
}

//php artisan db:seed --class=Category
