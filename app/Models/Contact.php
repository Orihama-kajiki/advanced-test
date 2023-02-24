<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion',
    ];
    public function setFullNameAttribute($value)
    {
        $nameArray = explode(' ', $value);
        $this->attributes['lastname'] = $nameArray[0];
        $this->attributes['firstname'] = $nameArray[1];
        $this->attributes['fullname'] = $value;
    }
}
