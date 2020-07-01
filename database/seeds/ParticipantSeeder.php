<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('participants')->insert(['event_id' => '1', 'surname' => 'Иванов', 'name' => 'Петр', 'email' => 'ivan@test.te', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        DB::table('participants')->insert(['event_id' => '1', 'surname' => 'Сидоров', 'name' => 'Иван', 'email' => 'sidorov@test.te', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        DB::table('participants')->insert(['event_id' => '1', 'surname' => 'Петров', 'name' => 'Роман', 'email' => 'petrov@test.te', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

        DB::table('participants')->insert(['event_id' => '2', 'surname' => 'Ахметов', 'name' => 'Аскар', 'email' => 'ahmetov@test.te', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        DB::table('participants')->insert(['event_id' => '2', 'surname' => 'Чриков', 'name' => 'Роман', 'email' => 'chirkov@test.te', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
    }
}
