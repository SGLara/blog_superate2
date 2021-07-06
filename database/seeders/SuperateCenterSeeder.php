<?php

use Illuminate\Database\Seeder;
use App\SuperateCenter;
use Illuminate\Support\Facades\DB;

class SuperateCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('superate_centers')->insert([
            'name' => 'Centro ¡Supérate! Hilasal',
            'year' => 2004,
            'created_at' => now()
        ]);

        DB::table('superate_centers')->insert([
            'name' => 'Centro ¡Supérate! ADOC',
            'year' => 2008,
            'created_at' => now()
        ]);

        DB::table('superate_centers')->insert([
            'name' => 'Centro ¡Supérate! CASSA Sonsonate',
            'year' => 2008,
            'created_at' => now()
        ]);

        DB::table('superate_centers')->insert([
            'name' => 'Centro ¡Supérate! CASSA San Miguel',
            'year' => 2009,
            'created_at' => now()
        ]);

        DB::table('superate_centers')->insert([
            'name' => 'Centro ¡Supérate! Fundación Alberto Motta - San Miguelito',
            'year' => 2010,
            'created_at' => now()
        ]);

        DB::table('superate_centers')->insert([
            'name' => 'Centro ¡Supérate! Fundación Poma',
            'year' => 2011,
            'created_at' => now()
        ]);

        DB::table('superate_centers')->insert([
            'name' => 'Centro ¡Supérate! Merlet',
            'year' => 2011,
            'created_at' => now()
        ]);

        DB::table('superate_centers')->insert([
            'name' => 'Centro ¡Supérate! Fundación JUPÁ',
            'year' => 2013,
            'created_at' => now()
        ]);

        DB::table('superate_centers')->insert([
            'name' => 'Centro ¡Supérate! Fundación Raíces',
            'year' => 2013,
            'created_at' => now()
        ]);

        DB::table('superate_centers')->insert([
            'name' => 'Centro ¡Supérate! Grupo Q',
            'year' => 2018,
            'created_at' => now()
        ]);

        DB::table('superate_centers')->insert([
            'name' => 'Centro ¡Supérate! Fundación Alberto Motta - Ciudad Del Niño',
            'year' => 2018,
            'created_at' => now()
        ]);

        DB::table('superate_centers')->insert([
            'name' => 'Centro ¡Supérate! Fundación Provivienda',
            'year' => 2019,
            'created_at' => now()
        ]);
    }
}
