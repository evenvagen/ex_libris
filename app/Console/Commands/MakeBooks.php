<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeBooks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'books:create {amount?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'make books with random generated attributtes';

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
        \App\Models\Book::factory($this->argument('amount'))->create();
    }
}
