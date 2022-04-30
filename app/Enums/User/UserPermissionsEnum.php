<?php

namespace App\Enums\User;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserPermissionsEnum extends Enum
{
    /* Main Roles */
    const ADMIN_ROLE =   'admin';
    const CUSTOMER_ROLE =   'customer';
    const PROVIDER_ROLE = 'provider';

    /* Actions */
    const VIEW =  'view';
    const VIEW_SELF =  'view_self';
    const CREATE =  'create';
    const UPDATE =  'update';
    const DELETE =  'delete';

    /* Modules */
    const USERS = 'users';
    const PROVIDERS = 'providers';
    const CUSTOMERS = 'customers';
    const ORDERS = 'orders';

    #permissions without modules

    const ADMIN_PERMISSION = 'admin';

    public static function getModules(){
        return [
            self::USERS,
            self::PROVIDERS,
            self::CUSTOMERS,
            self::ORDERS,
        ];
    }
    public static function getActions(){
        return [
             self::VIEW,  
             self::VIEW_SELF,
             self::CREATE,
             self::UPDATE,
             self::DELETE,
        ];
    }
    
    public static function getAdminActions(){
        return [
            self::VIEW,  
            self::CREATE,
            self::UPDATE,
            self::DELETE,
       ];
    }
    public static function getAdminModules(){
        return [
            self::USERS,
            self::PROVIDERS,
            self::CUSTOMERS,
            self::ORDERS,
       ];
    }
    
    public static function getRoles(){
        return [
            [   
                'name'=>self::ADMIN_ROLE,
                'actions'=>self::getAdminActions(),
                'modules'=>self::getAdminModules()
            ]
       ];
    }  
    
    public function getAdmin_Permission(){
        return self::ADMIN_PERMISSION ;
    }

    public static function getPermissioWithoutModules(){
       
    }
}
