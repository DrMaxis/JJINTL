<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class JJInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'JJ:install {--force : Do not ask for User confirmation}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install DB Data for JJI Web App';

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
     * @return mixed
     */
    public function handle()
    {


        if ($this->option('force')) {
            $this->proceed();

        } else {
            if ($this->confirm('This will delete All current data and install the default dummy data. Are you sure?')) {
                $this->proceed();

            }
        }
    }

    protected function proceed() {
        if ($this->confirm('This will delete All current data and install the default dummy data. Are you sure?')) {
        }



        $this->call('migrate:fresh', [
            '--seed' => true,
        ]);


        $this->call('db:seed', [
            '--class' => 'VoyagerDatabaseSeeder',
        ]);   
        
        $this->call('db:seed', [
            '--class' => 'CustomSettingsTableSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'VoyagerDummyDatabaseSeeder',
        ]);

        $this->call('db:seed', [
            '--class' => 'CustomDataTypesTableSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'CustomDataRowsTableSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'CustomMenusTableSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'CustomMenuItemsTableSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'CustomRolesTableSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'CustomPermissionsTableSeeder',
        ]);

        $this->call('db:seed', [
            '--class' => 'CustomPermissionRoleTableSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'CustomUsersTableSeeder',
        ]);

     



$this->info('
       
      _     _   ___ _   _ _____ _____ ____  _   _    _  _____ ___ ___  _   _    _    _     
     | |   | | |_ _| \ | |_   _| ____|  _ \| \ | |  / \|_   _|_ _/ _ \| \ | |  / \  | |    
  _  | |_  | |  | ||  \| | | | |  _| | |_) |  \| | / _ \ | |  | | | | |  \| | / _ \ | |    
 | |_| | |_| |  | || |\  | | | | |___|  _ <| |\  |/ ___ \| |  | | |_| | |\  |/ ___ \| |___ 
  \___/ \___/  |___|_| \_| |_| |_____|_| \_\_| \_/_/   \_\_| |___\___/|_| \_/_/   \_\_____|
                                                                                           
                                    Install Complete

                                                                                             
  ');

    }
}
