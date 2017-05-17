<?php

namespace App\Console\Commands;

use App\Models\PMUsers;
use Faker\Provider\Uuid;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Admin role';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    public function handle()
    {

        $this->comment('Create Admin');
        $name = $this->ask('Provide name');
        $this->info($name);
        $email = $this->ask('Provide email');
        $this->info($email);
        $password = $this->secret('Provide password');
        $this->info($password);

        $record = PMUsers::create(array([
            'id' => Uuid::uuid4(),
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]));

        $record->roleConnection()->sync('super_admin');
        $this->comment('Admin added');



    }
}
