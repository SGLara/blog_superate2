<?php

use Illuminate\Database\Seeder;
use App\Models\User;
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
        $user = User::make([
            'first_name' => 'Centro',
            'last_name' => '¡Supérate!',
            'email' => 'steven@example.com',
        ]);
        $user->password = bcrypt('P4$$w0rd++');
        $user->is_admin = true;
        $user->save();
    }
}
