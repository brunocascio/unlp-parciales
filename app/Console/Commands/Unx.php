<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Config;
use App\UnxUser;

class Unx extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'unx:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Site. (Migrations and default values)';

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
      $this->info('--------------------------');
      $this->info('Welcome to UNXParciales');
      $this->info('--------------------------');
      $this->info(' ');

      if ($this->confirm('Do you wish to continue? It\'s install a fresh instance of UNXParciales'))
      {
        $this->info('Installing Migrations...');
        $this->call('migrate:install');
        $this->info('Generating key...');
        $this->call('key:generate');
        $this->info('Migrating tables from migrations...');
        $this->call('migrate');
        $this->info('Seeding data...');
        $this->call('db:seed');

        $this->info('Hey! I need your help!');

        $site_title = $this->ask('What is the site title?');
        $admin_email = $this->ask('What is the admin email?');
        $admin_password = null;

        while ( empty($admin_password) || strlen($admin_password) < 8 ) {
          $admin_password = $this->secret('What is the admin password? (8 characters minimum)');
        }

        $this->info('Updating...');
        // Update site title
        Config::where('key', 'title')->update(['value' => $site_title]);
        // Update admin password
        UnxUser::find(1)->update([
          'email' => $admin_email,
          'password' => $admin_password
        ]);

        $this->call('optimize');

        if ($this->confirm('Do you want caching? (Production ready)'))
        {
          $this->info('Caching classes, configs and routes...');
          $this->call('route:cache');
          $this->call('config:cache');
        }

        $this->info('All OK! Bye :)');
      }
    }
}
