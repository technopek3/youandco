<?php

namespace App\Console\Commands;

use App\Models\User;
use Enums\User\UserPermissions;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

class project_start extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command will migrate , create Admin ,bussiness sitting... and many more';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    { 
        $this->info('start migration');
        Artisan::call('migrate:fresh');
        $this->info('migrate done');

        $this->info('start create permissions & roles');
        $this->call('permissions:create');

        $this->info('start create Admin user');
        $this->call('admin:create');
        
        return 0;
    }
}
