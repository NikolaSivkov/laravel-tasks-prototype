<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:test {user} {initialDate} {finalDate}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is a command description';

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
        $this->info('Hello ' . $this->argument('user'));
        $this->info("Initial Date: " . $this->argument('initialDate'));
        $this->info("Final Date: " . $this->argument('finalDate'));
        return 0;
    }
}
