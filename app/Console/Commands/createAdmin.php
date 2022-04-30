<?php

namespace App\Console\Commands;

use App\Enums\User\UserPermissionsEnum;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class createAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this commande will create the admin';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = User::create([
            User::FIRST_NAME => "admin",
            User::LAST_NAME => "You&Co",
            User::EMAIL => env('ADMIN_EMAIL'),
            User::PASSWORD => Hash::make(env('ADMIN_PASSWORD')) ,
            User::ADDRESS => env('ADMIN_ADDRESS') ,
            User::CITY => env('ADMIN_CITY') ,
            User::PHONE => env('ADMIN_PHONE') ,
            User::GENDER => env('ADMIN_GENDER') ,
        ]);

        $role = Role::firstOrCreate([
            'name'=> UserPermissionsEnum::ADMIN_ROLE
        ]);


        $user->assignRole($role);

        $admin_permission = Permission::firstOrCreate(['name'=>UserPermissionsEnum::ADMIN_PERMISSION]);
        $user->givePermissionTo($admin_permission); 
        $this->info('admin created');
        return 0;
    }
}
