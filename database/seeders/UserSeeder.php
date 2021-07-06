<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'first_name' => 'Steven',
        //     'last_name' => 'Lara',
        //     'email' => 'steven@example.com',
        //     'password' => bcrypt('spiderman')
        // ]);

        // factory(User::class, 10)->create();
    }
}
