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
        factory(App\Stores::class, 10)->create()->each(function($u) {
            for($i = 0; $i < 10 ; $i++)
            {
                $u->articles()->save(factory(App\Articles::class)->make());
            }
        });
    }
}
