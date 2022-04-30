<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experiance extends Model
{
    use HasFactory,SoftDeletes;

    const NAME ='name';
    const HOURLY_PRICE ='hour_price';
    
    protected $fillable = [self::NAME,self::HOURLY_PRICE];

    /* Data getters */
    public function getName(){
        return $this->getAttribute(self::NAME);
    }
    public function getPrice(){
        return $this->getAttribute(self::HOURLY_PRICE);
    }
}
