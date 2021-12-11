<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->truncate();

        DB::table('statuses')->insert([
            'name' => "В очереди"
        ]);
        DB::table('statuses')->insert([
            'name' => "В работе"
        ]);
        DB::table('statuses')->insert([
            'name' => "Выполнена"
        ]);
        DB::table('statuses')->insert([
            'name' => "Отменена"
        ]);
        DB::table('statuses')->insert([
            'name' => "Отсутствует"
        ]);
        DB::table('statuses')->insert([
            'name' => "Приостановлена"
        ]);
    }
}
