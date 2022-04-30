<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Holiday extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [self::NAME,self::DATE,self::FEE];

    const NAME ='name';
    const DATE ='date';
    const FEE ='fee';
    
    /* data getters */
    public function getName(){
        return $this->getAttribute(self::NAME);
    }
    public function getDate(){
        return $this->getAttribute(self::DATE);
    }
    public function getFee(){
        return $this->getAttribute(self::FEE);
    }
}
