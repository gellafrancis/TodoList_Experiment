<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Todo::class, 2)->create(); // 7 lang then punta sa Database Seeder to register it
    }
}
