<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert(['id' => 1, 'title' => 'Встреча однокласников', 'description' => 'Сходить на встречу и отрваться как следует', 'city' => 'Алматы', 'date_event' => '2020-06-05', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        DB::table('events')->insert(['id' => 2, 'title' => 'Собрание коллег', 'description' => 'рассмотреть вопросы относительно работы', 'city' => 'Алматы', 'date_event' => '2020-06-08', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
    }
}
