<?php

use Illuminate\Database\Seeder;
use App\Magazine;

class MagazineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Magazine::class, 10)->create();
    }
}
