<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PhpArtisan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:php-artisan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('cache:clear');
        $this->call('view:clear');

        return Command::SUCCESS;
    }
}
