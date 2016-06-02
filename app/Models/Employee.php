<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['company_id', 'name', 'position', 'mobile_no', 'email', 'wechat', 'qq', 'tel_no', 'address', ];

    public function company() {
        return $this->belongsTo('App\Models\Company');
    }
}
