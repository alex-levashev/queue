<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tasks')->insert(
        [
          'name' => 'Получение письма',
          'counter' => 0,
        ]);
      DB::table('tasks')->insert(
        [
          'name' => 'Отправка письма',
          'counter' => 0,
        ]);
      DB::table('tasks')->insert(
        [
          'name' => 'Получение посылки',
          'counter' => 0,
        ]);
      DB::table('tasks')->insert(
        [
          'name' => 'Отправка посылки',
          'counter' => 0,
        ]);
    }
}
