<?php

namespace App\Console\Commands;

use App\Models\Giver;
use App\Models\User;
use Illuminate\Console\Command;

class AddUser extends Command
{
    protected $signature = 'add:user';

    protected $description = 'Add User';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Giver::factory()->create();
    }
}
