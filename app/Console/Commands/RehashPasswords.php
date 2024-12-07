<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class RehashPasswords extends Command
{
    protected $signature = 'rehash:passwords';

    protected $description = 'Rehashes all user passwords using Bcrypt';

    public function handle()
    {
        $users = User::all(); // Lấy tất cả users

        $bar = $this->output->createProgressBar(count($users));

        foreach ($users as $user) {
            $user->password = Hash::make($user->password);
            $user->save();
            $bar->advance();
        }

        $bar->finish();

        $this->info('All passwords rehashed successfully!');
    }
}
