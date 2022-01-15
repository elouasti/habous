<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class VoyagerAdminInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'voyageradmin:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Dummy data';

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
        if($this->confirm('are you sure?')){
            $this->call('migrate:fresh',[
                '--seed' => true,
            ]);
            $this->call('db:seed',[
                '--class'=>'VoyagerDatabaseSeeder'
            ]);
            $this->call('db:seed',[
                '--class'=>'VoyagerDummyDatabaseSeeder'
            ]);
            $this->info('Database data installed!');
        }
        
    }
}
