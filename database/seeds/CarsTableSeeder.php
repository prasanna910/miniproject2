<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\car::class, 50)->create()->each(function ($u) {
            // $u->cars()->save(factory(App\car::class)->make());
        });
    }
}
