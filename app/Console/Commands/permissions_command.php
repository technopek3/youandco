<?php

namespace App\Console\Commands;

use App\Enums\User\UserPermissionsEnum;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class permissions_command extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permissions:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command will create permissions';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('start creation of permissions');

        //create all permissions 
        foreach(UserPermissionsEnum::getModules() as $module ){
            foreach(UserPermissionsEnum::getActions() as $action){
                Permission::firstOrCreate([
                    'name' => $action.'.'.$module
                ]);
                $this->info('creat permission : "'.$action.' '.$module .'"');
            }
        }

        #create all rols
        foreach(UserPermissionsEnum::getRoles() as $role ){
            $new_role = Role::firstOrCreate([
                'name' => $role['name']
            ]);
            $this->info('creat role : "'.$new_role->name.'"');

            #assign the role with its permissions
            foreach($role['actions'] as $action ){
                foreach($role['modules'] as $module){
                    $permission = Permission::firstOrCreate([
                        'name' => $action.' '.$module
                    ]);
                    $new_role->givePermissionTo($permission);
                    $this->info('assigned permission  : "'.$permission->name.' to '.$new_role->name .'"');
                }
            }

        }
        
        Artisan::call('cache:clear'); # clear cach with spatie commande not this one 
        return 0;
    }
}
