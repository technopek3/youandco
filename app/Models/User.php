<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;



class User extends Authenticatable implements Hasmedia
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles,SoftDeletes,InteractsWithMedia;

    const ID = 'id';
    const FIRST_NAME = 'first_name';
    const LAST_NAME = 'last_name';
    const EMAIL = 'email';
    const EMAIL_VERIFIED_AT = 'email_verified_at';
    const PASSWORD = 'password';
    const PHONE = 'phone';
    const ADDRESS = 'address';
    const CITY = 'city';
    const GENDER = 'gender';
    const REMEMBER_TOKEN = 'remember_token';
    const API_TOKEN = 'apitoken';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    
    const TABLE = 'users';

    
    protected $guarded = [
        self::ID,
        self::EMAIL_VERIFIED_AT,
        self::CREATED_AT,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        self::PASSWORD,
        self::REMEMBER_TOKEN,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        self::EMAIL_VERIFIED_AT => 'datetime',
    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('avatar')
            ->singleFile()
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('avatar')
                    ->width(100)
                    ->height(100);

                $this
                    ->addMediaConversion('avatar40')
                    ->width(40)
                    ->height(40);
            });
    }

    public function image_100(){
        return $this->getFirstMediaUrl('image','image');
    }
    public function image_40(){
        return $this->getFirstMediaUrl('image','image40');
    }


    public function getFirstname(){
        return $this->getAttribute(self::FIRST_NAME);
    }
    public function getLastname(){
        return $this->getAttribute(self::LAST_NAME);
    }
    public function getFullname(){
        return $this->getFirstname() .' '.  $this->getLastname();
    }
    public function getEmail(){
        return $this->getAttribute(self::EMAIL);
    }
    public function getPhone(){
        return $this->getAttribute(self::PHONE);
    }
    public function getAddress(){
        return $this->getAttribute(self::ADDRESS);
    }
    public function getApitoken(){
        return $this->getAttribute(self::API_TOKEN);
    }


}
