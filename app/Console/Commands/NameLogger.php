<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class NameLogger extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:name {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        //\Log::debug('your name is ' $this->argument('user'));
        //return 0;
        $user = $this->argument('user');
        $this->info('your name is : ' . $user);
    }
}
