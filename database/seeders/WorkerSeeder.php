<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('workers')->insert([
            ['name' => 'name1', 'surname' => 'surname1'],
            ['name' => 'name2', 'surname' => 'surname2'],
            ['name' => 'name3', 'surname' => 'surname3'],
        ]);
    }
}
