<?php

use Illuminate\Database\Seeder;

class SuperZapatosTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Stores::class, 50)->create()->each(function($u) {
            $u->articles()->save(factory(App\Articles::class)->make());
        });
    }
}
