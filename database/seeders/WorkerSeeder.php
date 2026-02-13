<?php

namespace Database\Seeders;

use App\Models\Position;
use App\Models\Worker;
use Illuminate\Database\Seeder;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('positions')->insert([
//            ['title' => 'manager', 'salary' => '100000'],
//            ['title' => 'developer', 'salary' => '60000'],
//            ['title' => 'designer', 'salary' => '700000'],
//        ]);

        Position::factory(3)->create();
        Worker::factory(10)->create();

    }
}
