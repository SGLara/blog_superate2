<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->truncateTables([
        //     'superate_centers',
        // ]);

        $this->call(SuperateCenterSeeder::class);
    }

    protected function truncateTables(array $tables)
    {
        //DISABLE THE FOREIGN KEY CONSTRAINT
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        
        //ENABLE THE FOREIGN KEY CONSTRAINT
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
