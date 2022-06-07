<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class GenerateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates a new admin';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $first_name = $this->ask("May I have the admin's first name?");
        $last_name = $this->ask("May I have the admin's last name?");
        $email = $this->ask("May I have the admin's email?");
        $password = $this->ask("May I have the admin's password");

        try {
            $admin = User::make([
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
            ]);
            
            $admin->password = Hash::make($password);
            $admin->is_admin = 1;
            $admin->save();
            $admin->markEmailAsVerified();
    
            $this->info('Admin generated successfully!');
        } catch (\Throwable $th) {
            $this->error('Email already taken!');
        }
    }
}
