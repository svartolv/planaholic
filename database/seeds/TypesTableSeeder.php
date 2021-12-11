<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->truncate();

        DB::table('types')->insert([
            'name' => "Гипотетическая"
        ]);
        DB::table('types')->insert([
            'name' => "Личная"
        ]);
        DB::table('types')->insert([
            'name' => "Рабочая"
        ]);
        DB::table('types')->insert([
            'name' => "Регламентная"
        ]);
        DB::table('types')->insert([
            'name' => "Циклическая"
        ]);
    }
}
