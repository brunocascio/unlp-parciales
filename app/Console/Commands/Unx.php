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
        $this->call('migrate:install');
        $this->call('key:generate');
        $this->call('migrate');
        $this->call('db:seed');

        $site_title = $this->ask('What is the site title?');
        $admin_email = $this->ask('What is the admin email?');
        $admin_password = $this->secret('What is the admin password?');

        // Update site title
        Config::where('key', 'title')->update(['value' => $site_title]);
        // Update admin password
        UnxUser::find(1)->update([
          'email' => $admin_email,
          'password' => bcrypt($admin_password)
        ]);
      }
    }
}
