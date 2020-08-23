<?php

use Illuminate\Database\Seeder;
use App\SuperateCenter;

class SuperateCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SuperateCenter::class, 10)->create();
    }
}
