<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'short_name', 'mobile_no', 'tel_no', 'address', 'intro', ];
}
