<?php

use Illuminate\Database\Seeder;
use App\Models\Magazine;

class MagazineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Magazine::factory(10)->create();
    }
}
